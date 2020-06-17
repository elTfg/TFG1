
 <!--<button class="btn btn-outline-info" onclick="document.getElementById('gestionRoles').style.display='block'" style="width:auto;">
   <!-- <i class="fa fa-sign-in" aria-hidden="true"></i></button> -->
    <button type="button" class="btn btn-outline-info" onclick="document.getElementById('gestionRoles').style.display='block'"><i class="fa fa-sign-in" aria-hidden="true"></i>Gestionar roles</button>

<div class="center mt-3">
    <div class="modal" id="gestionRoles" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="width: auto;">
                <div class="modal-header" id="cabecera-login">
                    <h4 id="titulo-login">Gestion de Roles</h4>
                    <button type="button" class="close text-right" data-dismiss="modal"><span onclick="document.getElementById('gestionRoles').style.display='none'" 
                        class="w3-button w3-display-topright">&times;</span></button>						 
                </div>
                <div class="modal-body" style="padding:40px 50px;max-height:500px;" >
                    <div class="card-deck mb-3 text-center justify-content-center" style="max-width:900px">
                        <div class="d-inline card mb-4 shadow-sm"  id="carta modal">
                            <div class="card-header" style="width: auto;">
                            <h4 class="my-0 font-weight-normal">Roles disponibles</h4>
                            </div>
                            <div class="card-body">
                                <table border="1" class="text-center">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Slug</th>
                                        <th>Descripcion</th>
                                        <th colspan="2">Accion</th>
                                    </tr>
                                    @foreach ($roles as $rol)
                                        <tr> 
                                         <td>{{ $rol->id }}</td>
                                         <td>{{ $rol->nombre_rol }}</td>
                                         <td>{{ $rol->descripcion_rol }}</td>
                                         <td><a class="btn btn-info btn-sm"  href="{{ route ('editar_rol',$rol->id) }}">Editar Rol</a></td>
                                         <td><form action="{{ route('borrar_rol', $rol->id) }}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-danger btn-sm" style="color: white;" type="submit">Borrar Rol</a>
                                          </form></td>
                                        </tr> 
                                    @endforeach
                                </table>    
                            </div>
                        </div>
                    </div>							
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-right" data-dismiss="modal"><span onclick="document.getElementById('gestionRoles').style.display='none'" 
                        class="w3-button w3-display-topright">Cancelar</span></button>
                </div>
            </div>									
        </div>						
    </div>
</div>

