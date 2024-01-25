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
     * Protect the methods for autenticated users only.
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ArtistResource::collection(Artist::paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:128',
            'description' => 'required|string',
            'country' => 'required|string|max:128',
            'formation_year' => 'required|max:4',
        ]);

        if ($validated->fails())
            return $this->error($validated->errors(), 'Validation failed', 422);

        $artist = Artist::create($validated->validated());

        if ($artist)
            return $this->success($artist, 'Artist created successfully');

        return $this->error(null, 'Artist not created');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $artist = Artist::find($id);

        if (empty($artist))
            return $this->error(null, 'Artist not found', 404);

        return $this->success(new ArtistResource($artist));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artist = Artist::find($id);

        if (empty($artist))
            return $this->error(null, 'Artist not found', 404);

        $validated = Validator::make($request->all(), [
            'name' => 'nullable|string|max:128',
            'description' => 'nullable|string',
            'country' => 'nullable|string|max:128',
            'formation_year' => 'nullable|max:4',
        ]);

        if ($validated->fails())
            return $this->error($validated->errors(), 'Validation failed', 422);

        $artist->fill($validated->validated());
        $artist->save();

        return $this->success($artist, 'Artist updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        $deleted = $artist->delete();

        if ($deleted)
            return $this->success(null, 'Artist deleted successfully');

        return $this->error(null, 'Artist not deleted');
    }
}
