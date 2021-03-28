<?php
$title = "Agency";
require_once '../includes/header.php';
require_once '../db/config.php';
?>
<link rel="stylesheet" href="../static/css/paymentAgreement.css">
<link rel="stylesheet" href="../static/css/home.css">





<section class="payment">
    <h1>Payments</h1>
    <div class="row">
        <h2>Credit & debit cards</h2>
        <div class="col-1 icons">
            <img src="https://stripe.com/img/v3/pricing/payments/section-cards.svg" width="70" height="70" alt="cards logo">
        </div>
        <div class="col-2 info">
            <h2>Credit & debit cards</h2>
            <div class="description">
                <p>We charge a percentage-based fee each time you accept a credit or debit card payment. The price is the same for all major cards, including American Express. There’s no additional fee for international cards, failed charges, or refunds.</p>
                <ul class="card-list">
                    <li class="card-visa">Visa</li>
                    <li class="card-masterCard">Master Card</li>
                    <li class="card-americanExpress">American Express</li>
                    <li class="card-discover">Discover</li>
                    <li class="card-jcb">JCB</li>
                    <li class="card-dinersClub">Diners Club</li>
                </ul>
            </div>
        </div>
        <div class="col-1 price">
            <p>2.9% + 30¢</p>
        </div>
    </div>
    <div class="row">
        <div class="col-1 icons">
            <img src="https://stripe.com/img/v3/pricing/payments/section-ach.svg" width="70" height="70" alt="ACH logo">
            <img src="https://stripe.com/img/v3/pricing/payments/section-bitcoin.svg" width="70" height="70" alt="Bitcoin logo">
        </div>
        <div class="col-2 info">
            <h2>ACH and Bitcoin payments</h2>
            <div class="description">
                <p>ACH and Bitcoin fees are capped at $5—payments above $625 cost $5. We also provide tools to <a href="#">verify customers’ bank accounts</a> at no additional cost. We charge $4 for failed ACH payments.</p>
            </div>
        </div>
        <div class="col-1 price">
            <p>0.8% · $5 cap</p>
        </div>
    </div>

    <div class="row-alt">
        <div class="container">
            <div class="col-1 icons">
                <img src="https://stripe.com/img/v3/pricing/payments/section-features.svg" width="70" height="70" alt="also included logo">
            </div>
            <div class="col-3 info">
                <h2>Also included</h2>
                <div class="description">
                    <p>Get access to <a href="#">100+ features</a> right out of the box:</p>
                    <ul class="features-list">
                        <li>Smarter saved cards</li>
                        <li>Simple PCI compliance</li>
                        <li>Integrated fraud tools</li>
                        <li>Full data portability</li>
                        <li>Accounting integrations</li>
                        <li>Team security controls</li>
                        <li>Apple Pay, Android Pay</li>
                        <li>iOS Dashboard</li>
                        <li>Webhooks</li>
                    </ul>
                    <h3>Currency conversions</h3>
                    <p>We’ll automatically convert payments accepted in other currencies. <a href="#" class="ico-arrow">Learn more</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-1 icons">
            <img src="https://stripe.com/img/v3/pricing/payments/section-disputes.svg" width="70" height="70" alt="disputes logo">
        </div>
        <div class="col-2 info">
            <h2>Disputes</h2>
            <div class="description">
                <p>Disputed payments, such as chargebacks, incur a fee. If the customer’s bank resolves the dispute in your favor, the fee is fully refunded. <a href="#" class="ico-arrow">Learn more</a></p>
            </div>
        </div>
        <div class="col-1 price">
            <p>$15.00 or $0</p>
        </div>
    </div>
</section>



<?php
require_once '../includes/footer.php';
?>