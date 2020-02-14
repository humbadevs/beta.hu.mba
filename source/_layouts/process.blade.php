@extends('_layouts.master')

@section('body')
  @yield('content')
  <footer class="mt-28 flex flex-wrap xxl:flex-col justify-center sm:justify-between">
    <div class="ml-3 mb-3 static xxl:absolute xxl:bottom-0 text-humba-pink text-xs">&copy; 2020 humba team - All rights reserved.</div>
    <div class="text-right static xxl:absolute xxl:right-0 xxl:bottom-0 mb-3 ml-3 md:mr-3 text-humba-pink text-xs">
      <a href="/imprint">Impressum</a>, <a href="https://www.notion.so/humbamanagement/Privacy-b94679c757fb4ddba98be32908a8a412">Datenschutz</a>
    </div>
  </footer>
@endsection
