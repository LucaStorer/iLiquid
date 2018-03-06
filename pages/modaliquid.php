

<!-------------------------------------------MODAL NUOVO --------------------------------------->

<div class="modal modal-success" id="ModalNewLiquid">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>

				<h4 class="modal-title">Nuovo Cliente</h4>
			</div>
			<div class="modal-body">
				<form role="form" data-dpmaxz-eid="1" action="../Database/clienteDB.php" name="insertcliente" method="post">

					<div class="form-group">
						<label class="control-label">Nome *</label>
						<input type="text" class="form-control" name="nome" placeholder="Nominativo del cliente" data-dpmaxz-eid="2" required>
						<label class="control-label">Riferimento</label>
						<input type="text" class="form-control" name="riferimento" placeholder="Persona di riferimento" data-dpmaxz-eid="3">
						<label class="control-label">Indirizzo</label>
						<input type="text" class="form-control" name="indirizzo" placeholder="Via ..." data-dpmaxz-eid="3">
						<label class="control-label">email</label>
						<input type="email" class="form-control" name="email" placeholder="cliente@gardenerjob.com" data-dpmaxz-eid="3">
						<label class="control-label">Telefono</label>
						<input type="tel" class="form-control" name="telefono" placeholder="+39...." data-dpmaxz-eid="3">
						<label class="control-label">P.IVA / Codice Fiscale</label>
						<input type="number" class="form-control" name="piva" placeholder="00000000" data-dpmaxz-eid="3">
						<label class="control-label">Tipo</label>
						<select class="form-control" name="tipo" data-dpmaxz-eid="4" required="">
							<option value="CLIENTE">CLIENTE</option>
							<option value="PROSPECT">PROSPECT</option>
						</select>
						<label class="control-label">Categoria</label>
						<select class="form-control selectpicker" name="categoria" data-dpmaxz-eid="4" required="">
							<option value="PRIVATO" data-icon="glyphicon glyphicon-home">PRIVATO</option>
							<option value="CONTINUATIVO" data-icon="glyphicon glyphicon-calendar">CONTINUATIVO</option>
						</select>
					</div>
			</div>
			<div class="modal-footer">
				<!--  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button> -->
				<button type="submit" class="btn btn-outline" id="insertcliente" name="insertcliente">Save changes</button>
			</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<!---------------------------------------------------------------------------------------------->

<!-------------------------------------------MODAL MODIFICA ------------------------------------>
<div class="modal modal-success" id="ModalModCliente">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>

				<h4 class="modal-title">Modifica Cliente</h4>
			</div>
			<div class="modal-body">
				<form role="form" data-dpmaxz-eid="0" action="../Database/clienteDB.php" name="updatecliente" method="post">

					<div class="form-group">

						<input type="text" class="from-control" name="idrecord" id="idrecord" hidden data-dpmaxz-eid="1">
						<label class="control-label">Nome *</label>
						<input type="text" class="form-control" name="nome" placeholder="Nominativo del cliente" data-dpmaxz-eid="2" id="nome" required>
						<label class="control-label">Riferimento</label>
						<input type="text" class="form-control" name="riferimento" placeholder="Persona di riferimento" id="riferimento" data-dpmaxz-eid="3">
						<label class="control-label">Indirizzo</label>
						<input type="text" class="form-control" name="indirizzo" placeholder="Via ..." data-dpmaxz-eid="3">
						<label class="control-label">email</label>
						<input type="email" class="form-control" name="email" placeholder="cliente@gardenerjob.com" data-dpmaxz-eid="3">
						<label class="control-label">Telefono</label>
						<input type="tel" class="form-control" name="telefono" placeholder="+39...." data-dpmaxz-eid="3">
						<label class="control-label">P.IVA / Codice Fiscale</label>
						<input type="number" class="form-control" name="piva" placeholder="00000000" data-dpmaxz-eid="3">
						<label class="control-label">Tipo</label>
						<select class="form-control" name="tipo" data-dpmaxz-eid="4" id="tipo" required="">
							<option value="CLIENTE">CLIENTE</option>
							<option value="PROSPECT">PROSPECT</option>
						</select>
						<label class="control-label">Categoria</label>
						<select class="form-control selectpicker" name="categoria" data-dpmaxz-eid="4" required="">
							<option value="PRIVATO" data-icon="glyphicon glyphicon-home">PRIVATO</option>
							<option value="CONTINUATIVO" data-icon="glyphicon glyphicon-calendar">CONTINUATIVO</option>
						</select>
					</div>
			</div>
			<div class="modal-footer">
				<!--  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button> -->
				<button type="submit" class="btn btn-outline" name="updatecliente">Save changes</button>
				<button type="submit" class="btn pull-left btn-danger" data-dpmaxz-eid="6" name="deletecliente"><i class="fa fa-trash-o"></i> ELIMINA</button>
			</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!---------------------------------------------------------------------------------------------->





















<div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Edit Profile</h4>
                                    <p class="category">Complete your profile</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Company (disabled)</label>
                                                    <input type="text" class="form-control" disabled="">
                                                <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Fist Name</label>
                                                    <input type="text" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Adress</label>
                                                    <input type="text" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">City</label>
                                                    <input type="text" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Country</label>
                                                    <input type="text" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Postal Code</label>
                                                    <input type="text" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    <span class="material-input"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="../assets/img/faces/marc.jpg">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">CEO / Co-Founder</h6>
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <p class="card-content">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
