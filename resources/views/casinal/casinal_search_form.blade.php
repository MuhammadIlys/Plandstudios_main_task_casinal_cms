<!--banner section start -->

      <!-- Button trigger modal -->
      {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
         Launch demo modal
      </button> --}}

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               
               <div class="modal-body" style="margin-top: 20px">

                  <form method="GET" action="{{route('search')}}" onsubmit="return false">
                     <div class="">

                        <div class="form-group ">
                           
                           <input type="text" class="form-control" id="searchtext"
                           placeholder="Search">
                           
                        </div>
                        

                            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary float-right mr-2">Search</button>
                       
                     </div>
                  </form>

               </div>
              
            </div>
         </div>
      </div>