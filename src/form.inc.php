<fieldset>
            <legend>inscription</legend>
            <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <label for="numero">Numéro de serie</label>
                <input type="text" id="numero" name="numero_de_serie" placeholder="Numéro de serie" aria-required="true" autofocus>
                <label for="date">Votre anniversaire</label>
                <input type="date" id="date" name="date" aria-required="true">
                <label for="pays">Lieu de naissance</label>
                <div class="select-pays">
                    <select name="pays" id="pays" aria-required="true">
                        <option value="">Choisir son pays</option>
                        <option value="france">France</option>
                        <option value="germany">Germany</option>
                        <option value="italy">Italy</option>
                        <option value="spain">Spain</option>

                    </select>
                <input type="submit" value="Envoyer">
                
                </div>


            </form>
</fieldset>