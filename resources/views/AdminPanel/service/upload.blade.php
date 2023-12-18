
@extends('AdminPanel.layouts.main')
@section('main-section')

<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="image">Select image to upload:</label>
    <input type="file" name="image" id="image">
    <input type="submit" value="Upload Image" name="submit">
</form>
@endsection

