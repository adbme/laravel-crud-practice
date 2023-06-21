@extends('app')

@section('content')
    <div id="react-app"></div>

    <script>
        // Définir le composant React
        const HelloReact = () => {
            return <h1>Hello React!</h1>;
        };

        // Monter le composant React dans le conteneur 'react-app'
        ReactDOM.render(<HelloReact />, document.getElementById('react-app'));
    </script>
@endsection
