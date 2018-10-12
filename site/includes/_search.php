<div class="box-search">
    <form action="#">
        <fieldset>
            <legend>Procure pessoas...</legend>
            
            <input type="text" class="input-text" id="search-input" autocomplete="off" placeholder="Procure pessoas..." name="s" value="" />
            <input type="hidden" id="result-id" />
            <div class="box-search-result">
                <div class="person">
                    <div class="box-image" id="result-img"></div>
                    <div class="box-content">
                        <h4 class="name" id="result-title"></h4>
                        <h5 class="role" id="result-setor"></h5>
                        <small id="result-ramal"></small>
                    </div>
                </div>
            </div>
            <label for="search-submit" class="search-label"><i class="icon-magnifying-glass"></i></label>
            <input type="submit" id="search-submit" class="input-submit-hidden" />
        </fieldset>
    </form>
</div>