<form action="" method="post">
    <div class="form_default">

        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label for="name">Fecha</label></div>
            <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
            <div class="one_sixth"><label for="name">Sistema</label></div>
            <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
            <div class="one_sixth"><label for="email">Actividad</label></div>
            <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            </p>
        </fieldset>

        <fieldset>
            <legend>Prueba y Mantenimiento Semestral</legend>

            <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
                <colgroup>
                    <col class="head1" width="75%" />
                    <col class="head0" width="25%" />
                </colgroup>
                <tr>
                    <td>Descripción</td>
                    <td>Dato</td>
                </tr>
            </table>

            <div class="sTableWrapper">
                <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
                    <colgroup>
                        <col class="con1" width="75%" />
                        <col class="con0" width="25%" />
                    </colgroup>
                    <tr>
                        <td>1. Comprobar que la compuerta cierra completamente y se encaja el pestillo (si se dispone de el)</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>2. Comprobar que la compuerta esta firmemente anclada en su lugar y que el conducto (si existe) esta correctamente sujeto con las juntas</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>3. Engrasar todas las partes móviles para asegurar su correcto funcionamiento</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                </table>

        </fieldset>



        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea name="location" class="mftable" cols="" rows=""></textarea>
            </p>
        </fieldset>

        <input type="submit" name="button" id="button" value="Registrar" />
    </div>
</form>