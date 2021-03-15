<form method="post" action="{{(empty($gc)?route('gc_crt'):route('gc_upt', $gc->gc_id))}}">
    @csrf
    <div class="row">
        <div class="col">
            <input type="category" value="{{(empty($gc)?"": $gc->gc_tipe)}}" class="form-control" name="gc_tipe">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>
</form>
