            <div class="contact-us-area pt-20">
				<div class="container">	
					<div class="contact-us customer-login bg-white">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="send-message">
                                    <div>
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    @if($updateMode)
                                        @include('livewire.update')
                                    @else
                                        @include('livewire.create')
                                    @endif
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <div class=""><h3>Comments</h3></div>
                                    <table class="table table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Comment</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($comments as $comment)
                                            <tr>
                                                <th scope="row">{{$comment->user_id}}</th>
                                                <td>{{$comment->created_at->diffForHumans()}}</td>
                                                <td>{{$comment->comments}}</td>
                                                <td><span class="mr-10" style="cursor:pointer;"><i style="width:20px;height:20px;background: antiquewhite;text-align: center;padding-top: 4px;border-radius: 100%;" class="zmdi zmdi-edit" wire:click="edit({{$comment->id}})"></i></span><span style="cursor:pointer"><i style="width:20px;height:20px;background: antiquewhite;text-align: center;padding-top: 4px;border-radius: 100%;" class="zmdi zmdi-close" wire:click="remove({{$comment->id}})"></i></span></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
