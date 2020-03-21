<html>

<head>
    <title></title>
</head>

<body>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-database.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>

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
        firebase.analytics();

        var preference = firebase.database().ref("chat");

        // input ke firebase
        var submit = function() {
            var name = $("#nameInput").val();
            var message = $("#messageInput").val();

            preference.push({
                "name": name,
                "message": message
            });
        };

        $(window).load(function() {
            $("#formInput").submit(submit);
        });

        preference.on('child_added', function(data, prevChildKey) {
            var message = data.val();
            var output = document.getElementById("messagesDiv");
            var nama = message.name;
            var pesan = message.message;
            displayChatMessage(nama, pesan)
        });

        // Fungsi Tampil
        function displayChatMessage(name, text) {
            $('<div/>').text(text).prepend($('<em/>').text(name + ': ')).appendTo($('#messagesDiv'));
            $('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
        };

        // var myDataRef = firebase.database().ref('chat');
        // $('#messageInput').keypress(function(e) {

        //     var name = $('#nameInput').val();
        //     var text = $('#messageInput').val();
        //     // myDataRef.push({name: name, text: text});
        //     myDataRef.push({
        //         name: name,
        //         text: text
        //     });
        //     $('#messageInput').val('');

        // });
        // myDataRef.on('child_added', function(snapshot) {
        //     var message = snapshot.val();
        //     displayChatMessage(message.name, message.text);
        // });

        // var table = document.getElementById("tabel-chat").getElementsByTagName('tbody')[0];;
        // Menampilkan data 


        // myDataRef.on('child_removed', function(snapshot) {
        //     var deletedPost = snapshot.val();
        //     console.log("Chat was removed", deletedPost);
        // });
        // myDataRef.ref('notification').on('value', function(snapshot) {
        //   var message = snapshot.val();
        //   displayChatMessage(message.name, message.text);
        // });
        // myDataRef.ref('notification').on('child_removed', function(snapshot) {
        //   var deletedPost = snapshot.val();
        //   console.log("Chat was removed", deletedPost);
        // });
    </script>

    <div id='messagesDiv'></div>

    <form id="formInput">
        <input type='text' id='nameInput' placeholder='Name'>
        <input type='text' id='messageInput' placeholder='Message' value="">
        <button type="submit">Submit</button>
    </form>
</body>

</html>