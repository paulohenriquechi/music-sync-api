<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ArtistResource;
use App\Models\Artist;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtistController extends Controller
{
    use HttpResponses;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ArtistResource::collection(Artist::with('albums', 'songs')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|max:128',
            'description' => 'required',
            'country' => 'required|max:128',
            'formation_year' => 'required|max:4',
        ]);

        if ($validated->fails())
            return $this->error('Validation failed', 422, $validated->errors());

        $artist = Artist::create($validated->validated());

        if ($artist)
            return $this->success('Artist created successfully', 200, $artist);

        return $this->error('Artist not created', 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return new ArtistResource($artist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
