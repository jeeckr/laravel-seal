<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-analytics.js"></script>

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDCfAUwNxB4ejiPkr5aOrTXMT9d4FbNC2o",
        authDomain: "elearning-c74ce.firebaseapp.com",
        databaseURL: "https://elearning-c74ce.firebaseio.com",
        projectId: "elearning-c74ce",
        storageBucket: "elearning-c74ce.appspot.com",
        messagingSenderId: "760990298699",
        appId: "1:760990298699:web:7aa2306f269683b3ac53ce",
        measurementId: "G-WYHWPNJXTZ"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    // listen for incoming messages
    firebase.database().ref("chat").on("child_added", function(snapshot) {
        var html = "";
        // give each message a unique ID
        html += "<li id='message-" + snapshot.key + "'>";
        html += snapshot.val().message;
        html += "</li>";

        document.getElementById("messages").innerHTML += html;
    });
</script>

<!-- create a form to send message -->
<form action="{{ route('firebaseStore') }}" method="POST">
    @csrf
    <input id="message" class="message" name="message" placeholder="Enter message" autocomplete="off">
    <input type="submit">
</form>

<!-- create a list -->
<ul id="messages"></ul>

@foreach($keys as $data)
{{$data}}
@endforeach