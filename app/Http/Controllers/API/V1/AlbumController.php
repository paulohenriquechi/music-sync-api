<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AlbumResource;
use App\Models\Album;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlbumController extends Controller
{
    use HttpResponses;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AlbumResource::collection(Album::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'artist_id' => 'required|numeric',
            'name' => 'required|string|max:128',
            'release_date' => 'required|date',
            'cover' => 'nullable|string'
        ]);

        if ($validated->fails())
            return $this->error($validated->errors(), 'Validation Failed', 422);

        $album = Album::create($validated->validated());

        if ($album) 
            return $this->success($album, 'Album created successfully');
    
        return $this->error(null, 'Album not created');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $album = Album::find($id);

        if (empty($album))
            return $this->error(null, 'Album not found', 404);

        return $this->success(new AlbumResource($album));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $album = Album::find($id);

        if (empty($album))
            return $this->error(null, 'Album not found', 404);

        $validated = Validator::make($request->all(), [
            'artist_id' => 'nullable|numeric',
            'name' => 'nullable|string|max:128',
            'release_date' => 'nullable|date',
            'cover' => 'nullable|string'
        ]);

        if ($validated->fails())
            return $this->error($validated->errors(), 'Validation failed', 422);
        
        $album->fill($validated->validated());
        $album->save();

        return $this->success($album, 'Album updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $deleted = $album->delete();

        if ($deleted)
            return $this->success(null, 'Album deleted successfully');

        return $this->error(null, 'Album not deleted');
    }
}
