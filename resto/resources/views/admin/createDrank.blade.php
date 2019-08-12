@extends('layouts.menu')

@section('content')
    <form style="margin-top: 1.5em">
        <div class="form-group">
            <label for="exampleInputEmail1">Naam drank</label>
            <input type="text" class="form-control" id="drankNaam" name="drankNaam" placeholder="Naam">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prijs</label>
            <input type="text" class="form-control" id="drankNaam" name="drankNaam" placeholder="Prijs">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="soort" id="soort">
            <label class="form-check-label" for="soort">
                Frisdrank
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="soort" id="soort">
            <label class="form-check-label" for="soort">
                Wijn
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="soort" id="soort">
            <label class="form-check-label" for="soort">
                Bier op fles
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="soort" id="soort">
            <label class="form-check-label" for="soort">
                Bier van 't vat
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="soort" id="soort">
            <label class="form-check-label" for="soort">
                Trappist
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="soort" id="soort">
            <label class="form-check-label" for="soort">
                Abdijbier
            </label>
        </div>


        <button style="margin-top: 1em;" type="submit" class="btn btn-outline-danger">Submit</button>

    </form>
@endsection