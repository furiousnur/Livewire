<div>
     <section>
         <div class="container">
             <div class="row">
                 <div class="col-md-6 offset-md-3">
                     <div class="card">
                         <div class="card-header">
                             <h3>Contact Form</h3>
                         </div>
                         <div class="card-body">
                            <form class="form-group">
                                 <div class="form-group">
                                     <label for="exampleInputEmail1">Name</label>
                                     <input type="text" class="form-control" name="name" wire:model="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                                     @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                     @enderror
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputEmail1">Email address</label>
                                     <input type="email" class="form-control" name="email" wire:model="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                     @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                     @enderror
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputPassword1">Phone</label>
                                     <input type="text" name="phone" class="form-control" wire:model="phone" id="exampleInputPassword1" placeholder="Enter your phone">
                                     @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                     @enderror
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputPassword1">Message</label>
                                     <textarea name="msg" class="form-control" id="msg" wire:model="msg" cols="30" rows="10" ></textarea>
                                     @error('msg')
                                         <p class="text-danger">{{$message}}</p>
                                     @enderror
                                 </div>

                               {{-- <div class="form-group">
                                     <label for="exampleInputPassword1">Photo</label>
                                     <input type="file" name="photo" class="form-control" id="photo" wire:model="photo"></input>

                                    @if($photo)
                                        Photo Preview:
                                        <img src="{{ $photo->temporaryUrl() }}" alt="">
                                    @endif
                                     @error('photo')
                                         <p class="text-danger">{{$message}}</p>
                                     @enderror
                                 </div>--}}
                                 {{--<div class="form-check">
                                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                     <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                 </div>--}}
                                 <button type="submit" class="btn btn-primary" wire:click.prevent="store()">Submit</button>
                         </form>
                     </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
</div>
