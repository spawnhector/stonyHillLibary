<div>
    <div class="flex items-center justify-center">
            <div class="w-full max-w-md">
              <div class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4">
                <div
                  class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4"
                >
                  {{$type}} Login
                </div>
                <div class="mb-4">
                    {{$result}}
                  <label
                    class="block text-gray-700 text-sm font-normal mb-2"
                    for="username"
                  >
                    Email
                  </label>
                  <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="email"
                    v-model="form.email"
                    type="email"
                    required
                    autofocus
                    placeholder="Email"
                    wire:model="email"
                  />
                  @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mb-6">
                  <label
                    class="block text-gray-700 text-sm font-normal mb-2"
                    for="password"
                  >
                    Password
                  </label>
                  <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    v-model="form.password"
                    type="password"
                    placeholder="Password"
                    name="password"
                    required
                    autocomplete="current-password"
                    wire:model="password"
                  />
                  @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex items-center justify-between">
                  <button wire:click="login()" class="px-4 py-2 rounded text-white inline-block shadow-lg bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit">Sign In</button>
                </div>
            </div>
            </div>
          </div>
</div>
