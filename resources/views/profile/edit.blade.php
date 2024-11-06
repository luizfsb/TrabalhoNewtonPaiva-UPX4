<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 container-form-editar">
            <div class="p-4 sm:p-8 shadow sm:rounded-lg container-editar">
                <div class="max-w-xl">
                    @include('profile.partials.payment-history')
                </div>
            </div>
            <div class="p-4 sm:p-8 shadow sm:rounded-lg container-editar">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 container-editar shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 container-editar shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
