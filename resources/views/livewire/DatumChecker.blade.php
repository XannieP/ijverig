<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal hide fade" id="datumchecker" tabindex="1" role="dialog" aria-labelledby="datumchecker" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="datumchecker">Beschikbaarheids Bevestiging </h5>
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" style="font-size: 25px;">&times;</span>
                    </button>
                </div>

               <div class="modal-body">
                    <form enctype="multipart/form-data" class="text-center">
            <div class="col-md-12">
                <div class="form__div">
                    <input type="date" id="checker" wire:model="checker" name="checker" class="form__input @error('checker') is-invalid @enderror" placeholder=" " required autocomplete="checker" autofocus>
                    <label for="" class="form__label">Datum*</label>
                </div>
                @error('checker') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark close-btn" data-dismiss="modal">Sluiten</button>
                    <button type="button" wire:click.prevent="checker()" class="btn btn-success" data-dismiss="modal">Verstuur</button>
                </div>
            </div>
        </div>
    </div>
</div>
