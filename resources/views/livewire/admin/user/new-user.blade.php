<div>
    @section('page-title')
        New User
    @endsection
    <div class="row mb-3">
        <div class="col-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic Information</h4>
                    <form class="forms-sample" wire:submit.prevent="createNewUser">
                        <x-form.input placeholder="{{ __('Name') }}" id="name" label="Name" />
                        <x-form.input placeholder="{{ __('Email') }}" id="email" label="Email" />
                        <x-form.input placeholder="{{ __('Password') }}" type="password" id="password" label="Password" />
                        <x-form.select id="gender" label="{{ __('Gender') }}">
                            <option value="male"> Male</option>
                            <option value="female"> Female</option>
                        </x-form.select>
                        <x-form.textarea placeholder="{{ __('Address') }}" id="address" label="Address" rows="4" />
                        <x-form.button type="submit" class="btn-primary mr-2" label="Submit"></x-form.button>
                        <x-form.button type="button" class="btn-dark mr-2" label="Cancel" wire:click.prevent="cancelNewUser"></x-form.button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
