<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>

            <form wire:submit="login">
                <x-input-text fieldName="Email" value="form.email" />
                <x-input-text fieldName="Password" value="form.password" />

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
        