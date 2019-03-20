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
            <img src="{{url('images/post_guardado.jpg')}}" alt=" " class="img-responsive" />
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
            <img src="{{url('images/post_eliminado.jpg')}}" alt=" " class="img-responsive" />
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
            <img src="{{url('images/acceso_denegado.jpg')}}" alt=" " class="img-responsive" />
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
            <h3>El Comentario ha sido Creado o Modificado!</h3>
            <img src="{{url('images/comentario_guardado.jpg')}}" alt=" " class="img-responsive" />
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
            <h3>El Comentario ha sido Eliminado!</h3>
            <img src="{{url('images/comentario_eliminado.jpg')}}" alt=" " class="img-responsive" />
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
            <img src="{{url('images/mensaje_guardado.jpg')}}" alt=" " class="img-responsive" />
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
            <img src="{{url('images/mensaje_eliminado.jpg')}}" alt=" " class="img-responsive" />
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
            <img src="{{url('images/proyecto_guardado.jpg')}}" alt=" " class="img-responsive" />
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
            <img src="{{url('images/proyecto_eliminado.jpg')}}" alt=" " class="img-responsive" />
          </div>
          </center>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
  <div class="modal video-modal fade" id="myModalGal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <section>
          <center>
          <div class="modal-body">
            <h3>La Galería del Proyecto ha sido Guardada!</h3>
            <img src="{{url('images/galeria_guardado.jpg')}}" alt=" " class="img-responsive" />
          </div>
          </center>
        </section>
      </div>
    </div>
  </div>
<!-- //bootstrap-pop-up -->
@endif
