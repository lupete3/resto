<div>
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my_modal_6" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box" wire:submit='ajouter'>
            <h3 class="font-bold text-lg">Ajout client</h3>
            <div class="py-4 space-y-2">
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Nom client</span>
                    </div>
                    <input type="text" placeholder="Nom client" @class(['input input-bordered', 'input-error'=>
                    $errors->first('form.name')]) wire:model='form.name' />

                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Téléphone client</span>
                    </div>
                    <input type="text" placeholder="Téléphone client" @class(['input input-bordered', 'input-error'=>
                    $errors->first('form.contact')]) wire:model='form.contact' />

                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Adresse client</span>
                    </div>
                    <input type="text" placeholder="Adresse client" @class(['input input-bordered', 'input-error'=>
                    $errors->first('form.adress')]) wire:model='form.adress' />

                </label>
            </div>
            <div class="modal-action justify-between">
                <button type="button" class="btn btn-ghost" wire:click='closeModal'>Fermer</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Sauvegarder</span>
                </button>


            </div>
        </form>
    </div>
</div>
