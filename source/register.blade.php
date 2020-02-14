@extends('_layouts.process')

@section('content')
<div class="flex justify-center md:block px-16 pt-20">
    <a href='/'><img class="h-10" src="/assets/images/logo.png" alt="Logo"></a>
</div>

<div class="pt-16 md:pt-32">
  <span class="block px-4 py-2">
    <p class="text-center px-6 pb-8 text-humba-pink leading-nothing tracking-tighter text-3xl font-bold">Deine Anmeldung für die Beta</p>
  </span>
  <span class="flex justify-center block">
    <p class="px-6 md:w-1/3 text-block pb-8 text-red-300 leading-nothing tracking-tight text-sm font-thin">Da humba vorerst nur für Schüler des Humboldt Gymnasiums Berlin-Tegel verfügbar ist, benötigen wir nur deine IServ-Emailadresse, um dich auf die Warteliste für die Betaversion zu schreiben.
</p>
  </span>
  <span class="block">
    <div class="md:flex md:pl-24 sm:block">
        <div class="flex-1 sm:text-center md:text-right py-2 m-2">
        <form action="https://api.hu.mba/waitinglist/apply/" method="post" class="flex justify-center md:block">
                <input required class="flex-1 mx-4 md:mx-0 shadow appearance-none border rounded-lg py-2 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type='text' placeholder="vorname.nachname" name="hum_id" size='23' maxlength="60"></input>
        </div>
                <div class="flex-1 justify-center md:block text-center py-2 m-2">
                  <h1 class="md:text-left md:pt-2 flex-1 pb-8 text-gray-600 leading-nothing tracking-tighter text-md font-thin">@humboldtschule-berlin.eu</h1>
                </div>
          </div>

          <span class="block text-center px-4 py-2"><input type="submit" value="Anmelden" name="submit" class="flex-2 shadow-lg text-center object-center bg-humba-pink hover:bg-red-400 text-white font-bold py-2 px-20 rounded-lg"></span>
          <div class="flex justify-center">
            <span class="block text-center px-4 py-2 text-gray-400 md:w-1/3 text-xs">Mit dem Absenden deiner Daten erklärst du dich einverstanden mit unseren Datenschutzrichtlinien und den Nutzungsbedinungen.</span>
          </div>
        </form>
</div>
@endsection
