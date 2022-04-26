<x-header/>
   <main>
      <h1>Hello World!</h1>
      <p>This is the home page.</p>
      <p>Simple list:</p>
      <ul>
         @foreach ($categories as $category)
            <li>{{ $category['name'] }}</li>
         @endforeach
      </ul>

      <p>Links list:</p>
      <ul>
         @foreach ($links as $link)
            <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
         @endforeach
      </ul>
   </main>
</body>
</html>
