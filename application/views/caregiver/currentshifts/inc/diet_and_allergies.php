<div class="row">
    <div class="col-md-12">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group pt-2">
                        <label class="d-block font-weight-semibold">Select
                            client's dietry requirements</label>
                        <div class="custom-control custom-radio">
                            <input type="radio"
                                   class="custom-control-input"
                                   name="client_dietry_requirements"
                                   id="regular_diet" checked="">
                            <label class="custom-control-label"
                                   for="regular_diet">Regular
                                diet</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="client_dietry_requirements" id="mechanical_diet">
                            <label class="custom-control-label" for="mechanical_diet">Mechanical diet</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="client_dietry_requirements" id="pure_diet">
                            <label class="custom-control-label" for="pure_diet">Puree diet</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group pt-2">
                        <label class="d-block font-weight-semibold">Select
                            client's dietry requirements</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="client_fluids_requirements" id="thin_liquids" checked="">
                            <label class="custom-control-label" for="thin_liquids">Thin liquids</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="client_fluids_requirements" id="honey_thick_liquids">
                            <label class="custom-control-label" for="honey_thick_liquids">Honey thick liquids</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="client_fluids_requirements" id="nector_thick_liquids">
                            <label class="custom-control-label" for="nector_thick_liquids">Nector thick liquids</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="d-block font-weight-semibold">List client's known allergies</label>
                        <input style="width: 100%;" type="text" class="form-control tokenfield" value="" placeholder="Add multiple client's allergies(with comma seperated)" data-foucus>
                    </div>
                </div>
            </div>

            <div style="text-align: right;">
                <button type="button" class="btn btn-primary legitRipple">Save<i style="margin-left: 8px;" class="icon-arrow-right14"></i></button>
            </div>
        </form>
    </div>
</div>   
    
