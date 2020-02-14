@extends('_layouts.master')

@section('body')
<div id="page" class="lg:h-screen">
      <div class="hidden md:flex md:flex-row md:pt-32 md:pb-32 md:px-20 bg-humba-pink">
        <div class="pt-8 md:w-2/6 xxl:w-1/6">
          <div class="flex justify-center md:block">
            <img class="h-12 md:h-auto" src="/assets/images/logo-white-full.svg" alt="">
          </div>
          <p class="font-extrabold text-white pt-6 text-s">humba ist die App mit der du deine Freistunde oder Pause endlich sinnvoller verbringen kannst. Suche einfach andere, die auch frei haben, lerne neue Menschen kennen, lass dir von uns Aktivitäten vorschlagen oder gehe schon bald günstiger bei unseren Partnern essen.</p>
        </div>
        <div class="md:w-4/6 xxl:w-3/4">
          <h1 class="text-right text-white font-extrabold text-6xl xxl:text-7xl">Deine freie Zeit<br> ist wertvoll.<br> Nutze sie.</h1>
        </div>
      </div>
      <div class="bg-humba-pink md:hidden text-white pt-8">
        <span class="block"> <a href="/"><img class="m-auto h-12" src="/assets/images/logo-white-full.svg" alt="Logo"></a> </span>
        <span class="block text-center font-bold pt-10 text-5xl m-8"> Deine freie Zeit ist wertvoll. Nutze sie.</span>
        <span class="block text-center m-6 pb-20">humba ist die App mit der du deine Freistunde oder Pause endlich sinnvoller verbringen kannst. Suche einfach andere, die auch frei haben, lerne neue Menschen kennen, lass dir von uns Aktivitäten vorschlagen oder gehe schon bald günstiger bei unseren Partnern essen.</span>
      </div>
      <div class="pt-20">
        <h2 class="text-center font-bold text-1xl px-4 md:text-3xl text-humba-pink">Jetzt für die Beta anmelden <br>und bald die erste Version testen.</h2>
        <div class="flex justify-center pt-8">
          <a class="text-center font-bold text-2xl text-white bg-humba-pink rounded-xl py-2 px-20" href="/register">Anmelden</a>
        </div>
      </div>
      @include('_partials.footer')
</div>
<div id="loading">
  <div class="flex h-screen">
    <div class="m-auto">
      <img src="/assets/images/logo.png" class="animation my-auto h-16 w-16" alt="">
    </div>
  </div>
</div>
@endsection
