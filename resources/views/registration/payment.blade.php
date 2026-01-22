<x-layout title="Register">
    <!--==================================================-->
    <!-- Strat Echofy Donation Details Area-->
    <!--==================================================-->
    <div class="donation-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">

                            <form action="" method="post" target="_top">
                                <!-- contact form box -->
                                <div class="contact-form-box">
                                    <!-- form title -->
                                    <div class="forms-title up">
                                        <h1>Payment Method</h1>
                                    </div>
                                    <b>Package: {{ $attendee->package }} N$ 2,500.00</b>
                                </div>

                                <div class='check-content'>
                                    <h5>Select Payment Method</h5>
                                    <div class="dpx">

                                        <div id="paytodaybtn"></div>
                                        <script src="https://paytoday.com.na/js/pay-with-paytoday.js"></script>
                                        <script type="text/javascript">
                                            //<![CDATA[
                                            document.addEventListener('DOMContentLoaded', function() {
                                                createButton('Business ID', 'Business Name', 'Amount', 'Post-transaction URL', 'Reference Number');
                                            });
                                            //]]>
                                        </script>

                                        <strong>OR</strong>
                                        <br>
                                        <button type="submit" class="submit-donation">Get Quotation</button>



                                        {{-- <label>
                                            <input type="radio" class="option-input radio" value="PayToday"
                                                name="payment_method" checked />
                                            PayToday
                                        </label>
                                        <label>
                                            
                                            <input type="radio" class="option-input radio" value="Quotation"
                                                name="payment_method" />
                                            Quotation
                                        </label> --}}
                                    </div>
                                </div>
                                <!--account-details-here-->
                                <input type="hidden" name="cmd" value="_donations">
                                <input type="hidden" name="business" value="example@gmail.com">
                                <input type="hidden" name="lc" value="US">
                                <input type="hidden" name="amount">
                                <input type="hidden" name="no_note" value="0">
                                <input type="hidden" name="cn" value="Add special instructions to the seller:">
                                <input type="hidden" name="no_shipping" value="2">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="bn"
                                    value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">

                                <button type="submit" class="submit-donation">Go Back</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Echofy Donation Details Area-->
    <!--==================================================-->

</x-layout>
