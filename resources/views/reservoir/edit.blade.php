@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Edit</div>
               <div class="card-body">
                <form method="POST" action="{{route('reservoir.update',[$reservoir])}}">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="reservoir_title" value="{{old('reservoir_title', $reservoir->title)}}">
                        <small class="form-text text-muted">Name of the reservoir</small>
                      </div>
                      <div class="form-group">
                        <label>Area</label>
                        <input type="text" class="form-control" name="reservoir_area" value="{{old('reservoir_area', $reservoir->area)}}">
                        <small class="form-text text-muted">Size of the reservoir</small>
                      </div>
                      <div class="form-group">
                      <label>About</label> <textarea name="reservoir_about">{{old('reservoir_about', $reservoir->about)}}</textarea> <small class="form-text text-muted">Short description</small></div>
                      <div class="form-group author">
                    @csrf
                    <button type="submit" class="btn large-btn">EDIT</button>
                </form>
               </div>
           </div>
       </div>
   </div>
</div>