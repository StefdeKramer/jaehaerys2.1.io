

        <form action="{{ route('search.exercise') }}" method="get">
            <h3>Search on Muscle Groups</h3>
            <select name="musclegroups" class="form-control">
                <option value="Neck">Neck</option>
                <option value="Traps">Traps</option>
                <option value="Shoulders">Shoulders</option>
                <option value="Chest">Chest</option>
                <option value="Biceps">Biceps</option>
                <option value="Forearm">Forearm</option>
                <option value="Abs">Abs</option>
                <option value="Quads">Quads</option>
                <option value="Calves">Calves</option>
                <option value="Triceps">Triceps</option>
                <option value="Lats">Lats</option>
                <option value="Middle Back">Middle Back</option>
                <option value="Lower Back">Lower Back</option>
                <option value="Glutes">Glutes</option>
                <option value="Hamstring">Hamstring</option>
            </select>
            <button type="submit" class="btn btn-primary">Search</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>



