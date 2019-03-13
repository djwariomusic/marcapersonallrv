<label style="display:none;">{{$me = Auth::user()->username}}</label>
<!-- bootstrap-pop-up -->
@if(Auth::check())
  <div class="modal video-modal fade" id="myModalPost" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <section>
          <div class="modal-body">
            <h3>El Post ha sido Creado o Modificado!</h3>
            <img src="{{url('images/check-form.jpg')}}" alt=" " class="img-responsive" />
            <center>
            <p><a href="/home/{{Auth::user()->username}}"><input type="button" value="Mis Posts"></a></p>
            </center>
          </div>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
  <div class="modal video-modal fade" id="myModalPostDel" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <section>
          <center>
          <div class="modal-body">
            <h3>El Post ha sido Eliminado!</h3>
            <img src="{{url('images/delete-form.jpg')}}" alt=" " class="img-responsive" />
            <p align="center"><a href="/home/{{Auth::user()->username}}"><input type="button" value="Mis Posts"></a></p>
          </div>
          </center>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
  <div class="modal video-modal fade" id="myModalDened" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <section>
          <center>
          <div class="modal-body">
            <h3>Acción No Permitida!</h3>
            <img src="{{url('images/delete-form.jpg')}}" alt=" " class="img-responsive" />
            <p align="center"><a href="/home/{{Auth::user()->username}}"><input type="button" value="Mis Posts"></a></p>
          </div>
          </center>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
  <div class="modal video-modal fade" id="myModalComment" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <section>
          <center>
          <div class="modal-body">
            <h3>El comentario ha sido creado!</h3>
            <img src="{{url('images/check-form.jpg')}}" alt=" " class="img-responsive" />
            <p align="center"><a href="/home/{{Auth::user()->username}}"><input type="button" value="Mis Posts"></a></p>
          </div>
          </center>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
  <div class="modal video-modal fade" id="myModalCommentDel" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <section>
          <center>
          <div class="modal-body">
            <h3>El comentario ha sido Eliminado!</h3>
            <img src="{{url('images/delete-form.jpg')}}" alt=" " class="img-responsive" />
            <p align="center"><a href="{{url('/home/'.$me)}}"><input type="button" value="Mis Posts"></a></p>
          </div>
          </center>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
  <div class="modal video-modal fade" id="myModalMsj" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <section>
          <center>
          <div class="modal-body">
            <h3>El Mensaje ha sido Creado o Modificado!</h3>
            <img src="{{url('images/delete-form.jpg')}}" alt=" " class="img-responsive" />
            <p align="center"><a href="{{url('/home/'.$me)}}"><input type="button" value="Mis Posts"></a></p>
          </div>
          </center>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
  <div class="modal video-modal fade" id="myModalMsjDel" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <section>
          <center>
          <div class="modal-body">
            <h3>El Mensaje ha sido Eliminado!</h3>
            <img src="{{url('images/delete-form.jpg')}}" alt=" " class="img-responsive" />
            <p align="center"><a href="{{url('/home/'.$me)}}"><input type="button" value="Mis Posts"></a></p>
          </div>
          </center>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
  <div class="modal video-modal fade" id="myModalProj" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <section>
          <center>
          <div class="modal-body">
            <h3>El Proyecto ha sido Creado o Modificado!</h3>
            <img src="{{url('images/delete-form.jpg')}}" alt=" " class="img-responsive" />
            <p align="center"><a href="{{url('/home/'.$me)}}"><input type="button" value="Mis Posts"></a></p>
          </div>
          </center>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
  <div class="modal video-modal fade" id="myModalProjDel" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <section>
          <center>
          <div class="modal-body">
            <h3>El Proyecto ha sido Eliminado!</h3>
            <img src="{{url('images/delete-form.jpg')}}" alt=" " class="img-responsive" />
            <p align="center"><a href="{{url('/home/'.$me)}}"><input type="button" value="Mis Posts"></a></p>
          </div>
          </center>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
@endif
