<div class="row bg-white">
    <div class="gird-3" >
        <div>
            <label for="" class="col-form-label m-0">CI. Estudiante</label>
            <input type="text" class="form-control f-1" name="ci" id="ci">
        </div>
        <div>
            <label for="" class="col-form-label m-0">Sigla</label>
            <?php
                $sigla = $_GET["sigla"];
                $id = $_GET["id"];

                print "
                <input type='text' value={$sigla} class='form-control f-1' name='sigla' id='sigla'>
                ";
            ?>
        </div>
        <div>
            <label for="" class="col-form-label m-0">Semestre</label>
            <?php
                $sigla = $_GET["sigla"];
                print "
                <input type='text' value={$id} class='form-control f-1' name='semestre' id='semestre'>
                ";
            ?>
        </div>
    </div>
    <div class="gird-3 mt-3" >
        <div>
            <label for="" class="col-form-label m-0">Nota Primer Parcial</label>
            <input type="text" value=0 class="form-control f-1" name="nt1" id="nt1">
        </div>
        <div>
            <label for="" class="col-form-label m-0">Nota Segundo Parcial</label>
            <input type="text" value=0 class="form-control f-1" name="nt2" id="nt2">
        </div>
        <div>
            <label for="" class="col-form-label m-0">Nota Tercer Parcial</label>
            <input type="text" value=0 class="form-control f-1" name="nt3" id="nt3">
        </div>
    </div>
	<input type="submit" class="btn btn-green mt-3" value="Aceptar"/><br/>
    
</div>


<!-- insert into Nota values(9909707,"INF–112",80,1); -->