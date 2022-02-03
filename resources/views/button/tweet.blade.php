<button class="btn btn-block fixed-bottom buttonfixedbottom font-weight-bold btn-sm shadow-sm p-2  text-truncate" data-toggle="modal" data-target="#sendmessageshortcut">
    Tweet
</button>

  <div class="modal fade" id="sendmessageshortcut">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="border-bottom p-3 rounded  ">
          <button type="button" class="close float-left" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12  ">
                    <div class="d-flex flex-row">
                        <div class="p-1">
                            <a href="{{ route('profile',auth()->user()->username) }}">
                                <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' alt="imagefrined" class="rounded-full mr-3" width="40px" >
                            </a>
                        </div>
                        <div class="flex-grow-1 text-truncate font-weight-bold">
                            <form method="POST" action="/tweets" enctype="multipart/form-data">
                                @csrf
                                <textarea class="form-control border-0"  placeholder="What's Happening" name="body"></textarea>

                                <i class="em em-bird" aria-role="presentation" aria-label="BIRD"></i>
                                <div class="btn-group dropdown text-truncate  replyoption" width="" b>
                                    <a class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg viewBox="0 0 24 24" class=""  width="20px">
                                            <path d="M12 1.5C6.2 1.5 1.5 6.2 1.5 12S6.2 22.5 12 22.5 22.5 17.8 22.5 12 17.8 1.5 12 1.5zM9.047 5.9c-.878.484-1.22.574-1.486.858-.263.284-.663 1.597-.84 1.712-.177.115-1.462.154-1.462.154s2.148 1.674 2.853 1.832c.706.158 2.43-.21 2.77-.142.342.07 2.116 1.67 2.324 2.074.208.404.166 1.748-.038 1.944-.204.196-1.183 1.09-1.393 1.39-.21.3-1.894 4.078-2.094 4.08-.2 0-.62-.564-.73-.848-.11-.284-.427-4.012-.59-4.263-.163-.25-1.126-.82-1.276-1.026-.15-.207-.552-1.387-.527-1.617.024-.23.492-1.007.374-1.214-.117-.207-2.207-1.033-2.61-1.18-.403-.145-.983-.332-.983-.332 1.13-3.652 4.515-6.318 8.52-6.38 0 0 .125-.018.186.14.11.286.256 1.078.092 1.345-.143.23-2.21.99-3.088 1.474zm11.144 8.24c-.21-.383-1.222-2.35-1.593-2.684-.23-.208-2.2-.912-2.55-1.09-.352-.177-1.258-.997-1.267-1.213-.01-.216 1.115-1.204 1.15-1.524.056-.49-1.882-1.835-1.897-2.054-.015-.22.147-.66.31-.81.403-.36 3.19.04 3.556.36 2 1.757 3.168 4.126 3.168 6.873 0 .776-.18 1.912-.282 2.18-.08.21-.443.232-.595-.04z">
                                                </path>
                                            </svg>
                                            <span class="">Everyone can reply</span>

                                    </a>
                                    <div class="dropdown-menu p-3 shadow bg-white  border-0" style="width:300px;" wfd-invisible="true">
                                         <p class="font-weight-bold">Who can reply ?</p>
                                         <p class="text-muted">choose who can reply to this Tweet.</p>
                                         <p class="text-muted">anyone methioned can always reply.</p>
                                         <div class="btn-group-toggle" data-toggle="buttons">
                                             <label class="btn mb-2">
                                                 <input type="checkbox"> Everyone
                                             </label>
                                             <br>
                                             <label class="btn mb-2">
                                                <input type="checkbox"> People you follow
                                            </label>
                                            <br>
                                            <label class="btn ">
                                                <input type="checkbox">Only peaple you mention
                                            </label>
                                         </div>
                                    </div>
                                </div>
                                   <hr class="my-4">
                                <footer class="d-flex flex-row sendtweetssection">
                                    <div class="flex-grow-1 ">
                                        <div class="d-flex flex-row">
                                            <div class="pr-2 pt-2">
                                                <div class="upload">
                                                    <label for="file-input">
                                                        <span class="">
                                                            <svg viewBox="0 0 24 24" class="publishicon" width="30px">
                                                                <g><path d="M19.75 2H4.25C3.01 2 2 3.01 2 4.25v15.5C2 20.99 3.01 22 4.25 22h15.5c1.24 0 2.25-1.01 2.25-2.25V4.25C22 3.01 20.99 2 19.75 2zM4.25 3.5h15.5c.413 0 .75.337.75.75v9.676l-3.858-3.858c-.14-.14-.33-.22-.53-.22h-.003c-.2 0-.393.08-.532.224l-4.317 4.384-1.813-1.806c-.14-.14-.33-.22-.53-.22-.193-.03-.395.08-.535.227L3.5 17.642V4.25c0-.413.337-.75.75-.75zm-.744 16.28l5.418-5.534 6.282 6.254H4.25c-.402 0-.727-.322-.744-.72zm16.244.72h-2.42l-5.007-4.987 3.792-3.85 4.385 4.384v3.703c0 .413-.337.75-.75.75z">
                                                                </path>
                                                                <circle cx="8.868" cy="8.309" r="1.542">
                                                                    </circle>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </label>
                                                    <input id="file-input" type="file" name="image" />

                                                </div>

                                            </div>
                                            <div class="p-2">
                                                <svg viewBox="0 0 24 24" class="publishicon" width="30px">
                                                    <g>
                                                    <path d="M19 10.5V8.8h-4.4v6.4h1.7v-2h2v-1.7h-2v-1H19zm-7.3-1.7h1.7v6.4h-1.7V8.8zm-3.6 1.6c.4 0 .9.2 1.2.5l1.2-1C9.9 9.2 9 8.8 8.1 8.8c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2c1 0 1.8-.4 2.4-1.1v-2.5H7.7v1.2h1.2v.6c-.2.1-.5.2-.8.2-.9 0-1.6-.7-1.6-1.6 0-.8.7-1.6 1.6-1.6z"></path><path d="M20.5 2.02h-17c-1.24 0-2.25 1.007-2.25 2.247v15.507c0 1.238 1.01 2.246 2.25 2.246h17c1.24 0 2.25-1.008 2.25-2.246V4.267c0-1.24-1.01-2.247-2.25-2.247zm.75 17.754c0 .41-.336.746-.75.746h-17c-.414 0-.75-.336-.75-.746V4.267c0-.412.336-.747.75-.747h17c.414 0 .75.335.75.747v15.507z">
                                                    </path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="p-2">
                                                <svg viewBox="0 0 24 24" class="publishicon" width="30px">
                                                    <g>
                                                        <path d="M12 22.75C6.072 22.75 1.25 17.928 1.25 12S6.072 1.25 12 1.25 22.75 6.072 22.75 12 17.928 22.75 12 22.75zm0-20C6.9 2.75 2.75 6.9 2.75 12S6.9 21.25 12 21.25s9.25-4.15 9.25-9.25S17.1 2.75 12 2.75z"></path>
                                                        <path d="M12 17.115c-1.892 0-3.633-.95-4.656-2.544-.224-.348-.123-.81.226-1.035.348-.226.812-.124 1.036.226.747 1.162 2.016 1.855 3.395 1.855s2.648-.693 3.396-1.854c.224-.35.688-.45 1.036-.225.35.224.45.688.226 1.036-1.025 1.594-2.766 2.545-4.658 2.545z"></path><circle cx="14.738" cy="9.458" r="1.478"></circle><circle cx="9.262" cy="9.458" r="1.478"></circle></g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <button class="btn btn-sm shadow-sm py-2 px-2 text-white float-right font-weight-bold" type="submit">Tweet</button>

                                    </div>

                                </footer>
                            </form>
                        </div>
                    </div>
                        @error('body')
                        <span class="text-danger text-sm ml-10">{{ $message }}</span>

                        @enderror
                </div>
            </div>

        </div>
      </div>
    </div>
  </div>
