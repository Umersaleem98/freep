
<style>
    /* Footer Styling */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        color: #dbdbdb;
    }

    .footer {
        background-color: #1f2a38;
        /* Dark Blue */
        padding: 40px 20px;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-left {
        flex: 1 1 300px;
        margin-bottom: 20px;
    }

    .footer-left h2 {
        font-family: 'Roboto', sans-serif;
        font-style: italic;
        font-size: 36px;
        margin: 0 0 10px;
    }

    .footer-left p {
        margin: 0 0 15px;
        line-height: 1.6;
        font-size: 14px;
    }

    .footer-column {
        flex: 1 1 200px;
        margin-bottom: 20px;
    }

    .footer-column h3 {
        font-size: 16px;
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
    }

    .footer-column ul li {
        margin-bottom: 8px;
        font-size: 14px;
        cursor: pointer;
    }

    .footer-column ul li:hover {
        text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            text-align: left;
        }
    }
</style>



<!-- Footer -->
<footer class="footer mt-t">
    <div class="footer-container container" >
        <!-- Left Section -->
        <div class="footer-left">
            <h2><i>freep</i></h2>
            <p>Al meer dan 10 jaar is Freep actief voor zelfstandige professionals. Professionals die het verschil maken binnen de overheid. We helpen ze bij het vinden van een geschikte opdracht.</p>
            <p>Freep.nl B.V.<br>Startbaan 6, 1185 XR Amstelveen<br>KvK: 73489388</p>
        </div>

        <!-- Middle Section -->
        <div class="footer-column">
            <h3>DIRECT NAAR</h3>
            <ul>
                <li>Alle interim opdrachten</li>
                <li>Interim opdrachten statistiek</li>
                <li>Inhurende organisaties</li>
                <li>Reviews</li>
            </ul>
        </div>

        <!-- Middle Section -->
        <div class="footer-column">
            <h3>INFORMATIE</h3>
            <ul>
                <li>Over Freep</li>
                <li>Freep Detachering</li>
                <li>Werken bij Freep</li>
                <li>Privacy verklaring</li>
            </ul>
        </div>

        <!-- Right Section -->
        <div class="footer-column">
            <h3>KENNIS</h3>
            <ul>
                <li>Het Dynamisch aankoopsysteem (DAS)</li>
                <li>Het Uniform Europees Aanbestedingsdocument (UEA)</li>
                <li>Waar vind ik alle interim opdrachten bij de overheid?</li>
                <li>De interim inkoop markt in cijfers</li>
            </ul>
        </div>
    </div>
</footer>
