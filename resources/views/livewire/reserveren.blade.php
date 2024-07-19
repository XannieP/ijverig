<div>

    @include('livewire.DatumChecker')

    <form wire:submit.prevent="store">
        <div class="form-group row justify-content-center text-center p-3">
            <h1> Algemeen </h1>
        </div>
        <div class="form-group row justify-content-center">
            <div class="col-md-4">
                    <div class="form__div">
                        <input id="firstname" wire:model="firstname" name="firstname" class="form__input @error('firstname') is-invalid @enderror" placeholder=" " required autocomplete="firstname" autofocus>
                        <label for="" class="form__label">Voornaam*</label>
                    </div>
                @error('firstname') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="col-md-4">
                    <div class="form__div">
                        <input id="lastname" wire:model="lastname" name="lastname" class="form__input @error('lastname') is-invalid @enderror" placeholder=" " required autocomplete="lastname" autofocus>
                        <label for="" class="form__label">Achternaam*</label>
                    </div>
                @error('lastname') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <div class="col-md-4">
                    <div class="form__div">
                        <input id="email" wire:model="email" name="email" class="form__input @error('email') is-invalid @enderror" placeholder=" " required autocomplete="email" autofocus>
                        <label for="" class="form__label">E mail*</label>
                    </div>
                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="col-md-4">
                    <div class="form__div">
                        <input id="phonenumber" wire:model="phonenumber" name="phonenumber" class="form__input @error('phonenumber') is-invalid @enderror" placeholder=" " required autocomplete="phonenumber" autofocus>
                        <label for="" class="form__label">Telefoonnummer*</label>
                    </div>
                @error('phonenumber') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="form-group row justify-content-center text-center p-3">
            <h1> Reservering </h1>
        </div>
        <div class="form-group row justify-content-center">
            <div class="col-md-1 mb-3">
                <a class="btn btn-dark" data-toggle="modal" data-target="#datumchecker"> <i class="p-1 fa-solid fa-calendar-check" style="font-size: 25px;"></i> </a>
            </div>
            <div class="col-md-3">

                <div class="form__div">
                    <input type="date" id="date" wire:model="date" name="date" class="form__input @error('date') is-invalid @enderror" placeholder=" " required autocomplete="date" autofocus>
                    <label for="" class="form__label">Datum*</label>
                </div>
                @error('date') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="col-md-3">
                <div class="form__div">
                    <select wire:model="dagdeel"  name="dagdeel" id="dagdeel"  class="form__select form-control picker" required autofocus>
                        <option value=""> Kies dagdeel.</option>
                        <option value="ochtend">Ochtend</option>
                        <option value="middag">Middag</option>
                        <option value="avond">Avond</option>
                        <option value="ochtend + middag">Ochtend + Middag</option>
                        <option value="middag + avond">Middag + Avond</option>
                        <option value="ochtend + middag + avond">Ochtend + Middag + Avond</option>
                    </select>
                    <label for="dagdeel" class="form__label">Dagdeel*</label>
                </div>
                @error('dagdeel') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="col-md-3">
                <div class="form__div">
                    <select wire:model.lazy="vergaderruimte" name="vergaderruimte" id="vergaderruimte"  class="form__select form-control picker" required autofocus>
                        <option value=""> Kies vergaderruimte.</option>
                        <option value="voorruimte">Voorruimte</option>
                        <option value="achterruimte">Achterruimte</option>
                        <option value="Voorruimte en achterruimte">Voorruimte en achterruimte</option>
                    </select>
                    <label for="vergaderruimte" class="form__label">Vergaderruimte*</label>
                </div>
                @error('vergaderruimte') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <div class="col-md-10">
                    <div class="form__div">
                        <textarea id="description" wire:model="description" name="description" class="form__input  @error('description') is-invalid @enderror" maxlength="1000" placeholder=" " autocomplete="description" autofocus style="min-height: 100px;"></textarea>
                        <label for="" class="form__label">Beschrijving (optioneel)</label>
                    </div>
                @error('description') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="form-group row justify-content-center text-center">
            <div class="col-md-8 mt-5">
                <button type="submit" class="btn btn-lg btn-dark"> Reserveren </button>
                <p> Controleer beschilbaarheid met: <i class="p-2 fa-solid fa-calendar-check" style="font-size: 20px; background-color: #212529; color: #fff; border-radius: 5px;"></i> </p>
            </div>
        </div>


    </form>
</div>
