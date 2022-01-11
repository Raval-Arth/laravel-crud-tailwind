<form class="w-full max-w-sm" action='/do_register' method='post'>

  @csrf

  <div class="md:flex md:items-center mb-10">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="emailHelp" aria-describedby="name">
        You name Please
      </label>
    </div>
    <div class="md:w-2/3">
      <input name='name' class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="emailHelp" type="text">
    </div>
  </div>

  <div class="md:flex md:items-center mb-10">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="emailHelp" aria-describedby="emailHelp">
        Email Address
      </label>
    </div>
    <div class="md:w-2/3">
      <input name='email' class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="emailHelp" type="email">
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input name='password' class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="inline-password" type="password" placeholder="******************">

    </div>
  </div>

  <div class="mt-12 md:flex md:items-center">

    <div class="md:w-1/3"></div>
    <div class=" md:w-2/3">
      <button class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Sign Up
      </button>
    </div>
  </div>
</form>
