<div class="row">
    <div class="col-lg-12  rounded-lg py-5 px-5">
        <div class="d-flex flex-row">
            <div class="p-1">
                <a href="{{ route('profile',$user) }}">
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
                    <footer class="d-flex flex-row text-truncate sendtweetssection">
                        <div class="flex-grow-1 text-truncate">
                            <div class="d-flex flex-row text-truncate">
                                <div class="pr-2 pt-2 text-truncate">
                                    <div class="upload text-truncate">
                                        <input  type="file" name="image" class=" text-truncate" />
                                      
                                        <input id="" type="file" name="gif" />
                                    </div>
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
