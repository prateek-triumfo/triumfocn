<layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label>Name</label>
            <input type="text" name="name" id="name">
            
        </div>

        <!-- Email Address -->
        <div class="mt-4">
        <label>Email</label>
        <input type="text" name="email" id="email">
            
        </div>

        <!-- Password -->
        <div class="mt-4">
        <label>Password</label>
        <input type="password" name="password" id="password">
            
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
        <label>Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
            
        </div>

        <div class="flex items-center justify-end mt-4">
            <input type="submit" name="submit" value="Register">
        </div>
    </form>
</layout>
