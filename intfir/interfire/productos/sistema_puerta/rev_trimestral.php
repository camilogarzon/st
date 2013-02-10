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
            <legend>Inspección y Mantenimiento Trimestral</legend>

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
                        <td>1. Comprobar si hay daños físicos en la puerta y ver que el panel de vidriado (si existe) esta correcto</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>2. Comprobar que funcionan los cierrapuertas</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>3. Comprobar que funcionan los pestillos</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>4. Comprobar que funciona el coordinador (si existe)</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>5. Comprobar que los herrajes están seguros</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>6. Comprobar que no exista corrosión en puertas Kalamein</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>7. Comprobar cables y cadenas de las puertas deslizantes para asegurar que estan en perfecto estado y funcionan adecuadamente</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>8. Comprobar que pintura u otros contaminantes en cables, cadenas, enrrolladores, fusibles, y otras partes moviles no puedan afectar a su funcionamiento. Reemplazar los eslabones fusibles que se hayan pintado</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>9. Engrasar herrajes en puertas giratorias, enrrollables y deslizantes</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>10. Comprobar que las puertas homologadas no han sido modificadas indebidamente</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>11. Limpiar el área circundante de elementos que puedan interferir u obstruir el funcionamiento de la puerta</td>
                        <td><select name="occupation"><option>Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>12. Comprobar que las puertas deslizantes se mueven con facilidad y cierran completamente</td>
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