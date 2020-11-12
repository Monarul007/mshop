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
                                    <div>
                                        @if (session()->has('message_error'))
                                            <div class="alert alert-danger">
                                                {{ session('message_error') }}
                                            </div>
                                        @endif
                                    </div>
                                    @if($updateMode)
                                        @include('livewire.update')
                                    @elseif($searchMode)
                                        @include('livewire.search')
                                    @else
                                        @include('livewire.create')
                                    @endif
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class=""><h3>Posts</h3></div>
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Title</th>
                                                <th>Body</th>
                                                <th width="150px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($items as $index => $item)
                                            <tr>
                                                <td>{{ $item['post_id'] }}</td>
                                                <td>{{ $item['title'] }}</td>
                                                <td>{{ $item['body'] }}</td>
                                                <td>
                                                    <button wire:click="remove({{ $item['post_id'] }})" class="btn btn-danger btn-sm">Delete</button>
                                                </td>
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
