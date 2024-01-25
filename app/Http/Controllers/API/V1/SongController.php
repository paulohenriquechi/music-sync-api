<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SongResource;
use App\Models\Song;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
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
        return SongResource::collection(Song::paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'artist_id' => 'required|nummeric',
            'name' => 'required|string|max:128',
        ]);

        if ($validated->fails())
            return $this->error($validated->errors(), 'Validation Failed', 422);

        $song = Song::create($validated->validated());

        if ($song)
            return $this->success($song, 'Song created successfully');

        return $this->error(null, 'Song not created');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $song = Song::find($id);

        if (empty($song))
            return $this->error(null, 'Song not found', 404);

        return $this->success(new SongResource($song));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $song = Song::find($id);

        if (empty($song))
            return $this->error(null, 'Song not found', 404);

        $validated = Validator::make($request->all(), [
            'artist_id' => 'nullable|nummeric',
            'name' => 'nullable|string|max:128',
        ]);

        if ($validated->fails())
            return $this->error($validated->errors(), 'Validation failed', 422);

        $song->fill($validated->validated());
        $song->save();

        return $this->success($song, 'Song updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $deleted = $song->delete();

        if ($deleted)
            return $this->success(null, 'Song deleted successfully');

        return $this->error(null, 'Song not deleted');
    }
}
