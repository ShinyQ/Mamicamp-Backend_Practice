<div class="border border-blue-400 rounded-lg px-8 py-6 mb-4">
  <form class="" action="/tweets" method="post">
      @csrf
      <textarea name="body" class="w-full" placeholder="What's Up Boi ?"></textarea>
      <hr class="my-4">
      <footer class="flex justify-between">
        <img src="{{ auth()->user()->avatar }}" class="rounded-full mr-2" alt="your avatar">
        <button class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white" type="submit" name="button">Post A Tweet!</button>
      </footer>
  </form>

  <div class="">
    @error('body')
      <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
    @enderror
  </div>
</div>
