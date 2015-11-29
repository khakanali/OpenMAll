@extends('common.default')
@section('content')
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<style>
   .has-error .form-control {
   border-color: #a94442;
   -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
   box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
   }
</style>
<script>
   $(function() {

   // Setup form validation on the #register-form element
   $("#register-form").validate({

       // Specify the validation rules
       rules: {
           comment: "required"

       },
          // Specify the validation error messages
       messages: {
           comment: "Please enter Terms and condition"

       },

       submitHandler: function(form) {
           form.submit();
       }
   });

   });

</script>
{!! Form::open(array('method'=>'POST','url'=>'terms_cond','class'=>'form-horizontal',"style"=>"margin:0em !important", "id"=>"register-form")) !!}
    <div class="container">
        <div class="row" style="margin-top:-">
            <div class="panel panel-default">
              <label for="comment" style="padding-left:30px;">
               <div class="form-group">
                     <h2>Terms and Condition:</h2>
                  </label>
                  @if (Session::has("unsuccess"))
                  <div class="container">
                     <div class="alert alert-danger">
                        {!! Session::get("unsuccess") !!}
                     </div>
                  </div>
                  @endif
                  <textarea class="form-control" rows="5" id="comment" placeholder="Load T & C" style="height:600px ; width:95%; margin:20px;  margin-right:20px" onblur="validate()" required>
                    Terms & Conditions
                    INTRODUCTION
                    Welcome to the OpenSupermall.com website (the "Site"). These terms and conditions ("Terms and Conditions") apply to the Site, Intermedius OpenSupermall Sdn Bhd , and all of its divisions, subsidiaries, and affiliate operated Internet sites which reference these Terms and Conditions.
                    By accessing the Site, you confirm your understanding of the Terms and Conditions. If you do not agree to these Terms and Conditions of use, you shall not use this website. The Site reserves the right, to change, modify, add, or remove portions of these Terms and Conditions of use at any time. Changes will be effective when posted on the Site with no other notice provided. Please check these Terms and Conditions of use regularly for updates. Your continued use of the Site following the posting of changes to these Terms and Conditions of use constitutes your acceptance of those changes.
                    USE OF THE SITE
                    We grant you a non-transferable and revocable license to use the Site, under the Terms and Conditions described, for the purpose of shopping for personal items sold on the Site. Commercial use or use on behalf of any third party is prohibited, except as explicitly permitted by us in advance. Any breach of these Terms and Conditions shall result in the immediate revocation of the license granted in this paragraph without notice to you.
                    Content provided on this site is solely for informational purposes. Product representations expressed on this Site are those of the vendor and are not made by us. Submissions or opinions expressed on this Site are those of the individual posting such content and may not reflect our opinions.
                    Certain services and related features that may be made available on the Site may require registration or subscription. Should you choose to register or subscribe for any such services or related features, you agree to provide accurate and current information about yourself, and to promptly update such information if there are any changes. Every user of the Site is solely responsible for keeping passwords and other account identifiers safe and secure. The account owner is entirely responsible for all activities that occur under such password or account. Furthermore, you must notify us of any unauthorized use of your password or account. The Site shall not be responsible or liable, directly or indirectly, in any way for any loss or damage of any kind incurred as a result of, or in connection with, your failure to comply with this section.
                    USER SUBMISSIONS
                    Anything that you submit to the Site and/or provide to us, including but not limited to, questions, reviews, comments, and suggestions (collectively, "Submissions") will become our sole and exclusive property and shall not be returned to you. In addition to the rights applicable to any Submission, when you post comments or reviews to the Site, you also grant us the right to use the name that you submit, in connection with such review, comment, or other content. You shall not use a false e-mail address, pretend to be someone other than yourself or otherwise mislead us or third parties as to the origin of any Submissions. We may, but shall not be obligated to, remove or edit any Submissions.
                    ORDER ACCEPTANCE AND PRICING
                    Please note that there are cases when an order cannot be processed for various reasons. The Site reserves the right to refuse or cancel any order for any reason at any given time. You may be asked to provide additional verifications or information, including but not limited to phone number and address, before we accept the order.
                    We are determined to provide the most accurate pricing information on the Site to our users; however, errors may still occur, such as cases when the price of an item is not displayed correctly on the website. As such, we reserve the right to refuse or cancel any order. In the event that an item is mispriced, we may, at our own discretion, either contact you for instructions or cancel your order and notify you of such cancellation. We shall have the right to refuse or cancel any such orders whether or not the order has been confirmed and your credit card or bank account charged.
                    GST
                    GST will be implemented in Malaysia with effect from 1 April 2015 at the rate of 6%. It will replace the existing sales tax and service tax. Prices of Items and services provided by Intermedius Open Supermall Sdn Bhd, being GST registered company, will include GST where applicable.
                    Please refer to the GST Act 2014 published in the gazette on 19 June 2014 and the GST Regulations 2014 issued on 30 June 2014. GST is under the jurisdiction of the Royal Malaysian Customs Department (“Customs Department”).
                    TRADEMARKS AND COPYRIGHTS
                    All intellectual property rights, whether registered or unregistered, in the Site, information content on the Site and all the website design, including, but not limited to, text, graphics, software, photos, video, music, sound, and their selection and arrangement, and all software compilations, underlying source code and software shall remain our property. The entire contents of the Site also are protected by copyright as a collective work under Malaysia copyright laws and international conventions. All rights are reserved.
                    APPLICABLE LAW AND JURISDICTION
                    These Terms and Conditions shall be interpreted and governed by the laws in force in Malaysia. Subject to the Arbitration section below, each party hereby agrees to submit to the jurisdiction of the courts of Government of Malaysia to waive any objections based upon venue.
                    ARBITRATION
                    Any controversy, claim or dispute arising out of or relating to these Terms and Conditions will be referred to and finally settled by private and confidential binding arbitration before a single arbitrator held in Malaysia in English and governed by Malaysian law. The arbitrator shall be a person who is legally trained and who has experience in the information technology field in Malaysia and is independent of either party. Notwithstanding the foregoing, the Site reserves the right to pursue the protection of intellectual property rights and confidential information through injunctive or other equitable relief through the courts.
                    TERMINATION
                    In addition to any other legal or equitable remedies, we may, without prior notice to you, immediately terminate the Terms and Conditions or revoke any or all of your rights granted under the Terms and Conditions. Upon any termination of this Agreement, you shall immediately cease all access to and use of the Site and we shall, in addition to any other legal or equitable remedies, immediately revoke all password(s) and account identification issued to you and deny your access to and use of this Site in whole or in part. Any termination of this agreement shall not affect the respective rights and obligations (including without limitation, payment obligations) of the parties arising before the date of termination. You furthermore agree that the Site shall not be liable to you or to any other person as a result of any such suspension or termination.
                    Terms of Use

                    1. Interpretation
                    1.1 In these Conditions:
                    "Buyer" means the person who accepts a quotation of OpenSupermall for the supply of Goods or who otherwise enters into a contract for the supply of Goods with OpenSupermall ;
                    "Conditions" mean the general terms and conditions set out in this document and (unless the context otherwise requires) any special terms and conditions agreed in writing between the Buyer and O-shop ;
                    "Contract" means the contract for the purchase and sale of Goods, howsoever formed or concluded;
                    "Goods" means the goods (including any installment of the goods or any parts for them) which O-shop is to supply in accordance with a Contract;
                    "Writing" includes electronic mail facsimile transmission and any comparable means of communication.
                    1.2 Any reference in these Conditions to any provision of a statute shall be construed as a reference to that provision as amended re-enacted or extended at the relevant time.
                    1.3 The headings in these Conditions are for convenience only and shall not affect the interpretation of any parties.
                    2. Basis of the Contract
                    2.1 The supply of Goods by OpenSupermall to the Buyer under any Contract shall be subjected to these Conditions which shall govern the Contract to the exclusion of any other terms and conditions contained or referred to in any documentation submitted by the Buyer or in correspondence or elsewhere or implied by trade custom practice or course of dealing.
                    2.2 Any information made available in OpenSupermall’s website connection with the supply of Goods, including photographs, drawings, data about the extent of the delivery, appearance, performance, dimensions, weight, consumption of operating materials, operating costs, are not binding and for information purposes only. In entering into the Contract the Buyer acknowledges that it does not rely on and waives any claim based on any such representations or information not so confirmed.
                    2.3 No variation to these Conditions shall be binding unless agreed in writing between the authorised representatives of the Buyer and OpenSupermall.
                    2.4 Any typographical clerical or other error or omission in any quotation, invoice or other document or information issued by OpenSupermall in its website shall be subject to correction without any liability on the part of OpenSupermall.
                    3. Orders and Specifications
                    3.1 Order acceptance and completion of the contract between the Buyer and OpenSupermall will only be completed upon OpenSupermall issuing a confirmation of dispatch of the Goods to the Buyer. For the avoidance of doubt, OpenSupermall shall be entitled to refuse or cancel any order without giving any reasons for the same to the Buyer prior to issue of the confirmation of dispatch. OpenSupermallshall furthermore be entitled to require the Buyer to furnish OpenSupermall with contact and other verification information, including but not limited to address, contact numbers prior to issuing a confirmation of dispatch.
                    3.2 No concluded Contract may be modified or cancelled by the Buyer except with the agreement in writing of OpenSupermall and on terms that the Buyer shall indemnify OpenSupermall in full against all loss (including loss of profit) costs (including the cost of all labour and materials used) damages charges and expenses incurred by OpenSupermall as a result of the modification or cancellation, as the case may be.
                    4. Price
                    The price of the Goods and/or Services shall be the price stated in OpenSupermall’s website at the time which the Buyer makes its offer purchase to OpenSupermall. The price excludes the cost of packaging and delivery charges, any applicable goods and services tax, value added tax or similar tax which the Buyer shall be liable to pay to OpenSupermall in addition to the price.
                    5. Terms of Payment
                    5.1 The Buyer shall be entitled to make payment for the Goods pursuant to the various payment methods set out in OpenSupermall’s website. The terms and conditions applicable to each type of payment, as contained in OpenSupermall's website, shall be applicable to the Contract.
                    5.2 In addition to any additional terms contained in OpenSupermall’s website, the following terms shall also apply to the following types of payment:
                    5.2.1 Credit Card
                    Credit Card payment option is available for all Buyers. OpenSupermall accepts all Visa and MasterCards, both Credit and Debit, and is 3D Secure (Verified by Visa, and MasterCard Secure) enabled. All your credit card information are protected by means of industry- leading encryption standards.
                    Please take note that additional charges may be incurred if you are using a non-Malaysian issues card due to Foreign Exchange.
                    5.2.2 Debit Cards
                    OpenSupermall accepts all Malaysian Visa and MasterCard debit cards where subject to bank availability. All debit card numbers shall be protected by means of industry-leading encryption standards.
                    5.2.3 Online Banking
                    i. By choosing this payment method, the Buyer shall transfer the payment for the Goods to a OpenSupermall’s account for the total amount of the Buyer’s purchase (including any applicable taxes, fees and shipping costs). The transaction must be payable in Ringgit Malaysia. OpenSupermall, in its sole discretion, may refuse this payment option service to anyone or any user without notice for any reason at any time.
                    ii. For the time being, OpenSupermall accepts online bank transfers from AmBank, Bank Islam, CIMB Bank, Hong Leong, Maybank, Public Bank, RHB.
                    6. Delivery/Performance
                    6.1 Delivery of the Goods shall be made to the address specified by the Buyer in its order.
                    6.2 OpenSupermall has the right at any time to sub-contract all or any of its obligations for the sale/delivery of the Goods to any other party as it may from time to time decide without giving notice of the same to the Buyer.
                    6.3 Any dates quoted for delivery of the Goods are approximate only. The time for delivery/performance shall not be of the essence, and OpenSupermall shall not be liable for any delay in delivery or performance howsoever caused.
                    7. Risk and property of the Goods
                    7.1 Risk of damage to or loss of the Goods shall pass to the Buyer at the time of delivery or if the Buyer wrongfully fails to take delivery of the Goods, the time when OpenSupermall has tendered delivery of the Goods.
                    7.2 Notwithstanding delivery and the passing of risk in the Goods or any other provision of these Conditions the property in the Goods shall not pass to the Buyer until OpenSupermall has received in cash or cleared funds payment in full of the price of the Goods and all other goods agreed to be sold by OpenSupermall to the Buyer for which payment is then due.
                    7.3 Until such time as the property in the Goods passes to the Buyer, the Buyer shall hold the Goods as OpenSupermall's fiduciary agent and bailee and shall keep the Goods separate from those of the Buyer.
                    7.4 The Buyer agrees with OpenSupermall that the Buyer shall immediately notify OpenSupermall of any matter from time to time affecting OpenSupermall’s title to the Goods and the Buyer shall provide OpenSupermall with any in-formation relating to the Goods as OpenSupermall may require from time to time.
                    7.5 Until such time as the property in the Goods passes to the Buyer (and provided the Goods are still in existence and have not been resold) OpenSupermall shall be entitled at any time to demand the Buyer to deliver up the Goods to OpenSupermall and in the event of non-compliance OpenSupermall reserves it’s right to take legal action against the Buyer for the delivery up the Goods and also reserves its right to seek damages and all other costs including but not limited to legal fees against the Buyer.
                    7.6 The Buyer shall not be entitled to pledge or in any way charge by way of security for any indebtedness any of the Goods which remain the property of OpenSupermall but if the Buyer does so all moneys owing by the Buyer to OpenSupermall shall (without prejudice to any other right or remedy of OpenSupermall) forthwith become due and payable.
                    7.8 If the provisions in this Condition 7 are not effective according to the law of the country in which the Goods are located, the legal concept closest in nature to retention of title in that country shall be deemed to apply mutatis mutandis to give effect to the underlying intent expressed in this condition, and the Buyer shall take all steps necessary to give effect to the same.
                    7.9 The Buyer shall indemnify OpenSupermall against all loss damages costs expenses and legal fees in-curred by the Buyer in connection with the assertion and enforcement of OpenSupermall's rights under this condition.
                    8. Force Majeure
                    9.1 OpenSupermall shall not be liable to the Buyer or be deemed to be in breach of the Contract by reason of any delay in performing or any failure to perform any of OpenSupermall’s obligations if the delay or failure was due to any cause beyond OpenSupermall's reasonable control. Without prejudice to the generality of the foregoing the following shall be regarded as causes beyond OpenSupermall's reasonable control:
                    8.1.1 Act of God, explosion, flood, tempest, fire or accident;
                    8.1.2 war or threat of war, sabotage, insurrection, civil disturbance or requisition;
                    8.1.3 acts of restrictions, regulations, bye-laws, prohibitions or measures of any kind on the part of any governmental parliamentary or local authority;
                    8.1.4 import or export regulations or embargoes;
                    8.1.5 interruption of traffic, strikes, lock-outs, other industrial actions or trade disputes (whether involving employees of OpenSupermall or of a third party);
                    8.1.6 interruption of production or operation, difficulties in obtaining raw materials labour fuel parts or machinery;
                    8.1.7 power failure or breakdown in machinery.
                    8.2 Upon the happening of any one of the events set out in Condition 8.1 OpenSupermall may at its option:-
                    8.2.1 fully or partially suspend delivery/performance while such event or circumstances continues;
                    8.2.2 terminate any Contract so affected with immediate effect by written notice to the Buyer and Lazada shall not be liable for any loss or damage suffered by the Buyer as a result thereof.
                    10. Notices
                    Any notice required or permitted to be given by either party to the other under these Conditions shall be in writing addressed, if to OpenSupermall, to its registered office or principal place of business and if to the Buyer, to the address stipulated in the relevant offer to purchase.
                    OpenSupermall reserves their right to these terms and conditions of sale at any time.
                  </textarea>
               </div>
               <div class="container text-center">
                  {!!Form::submit("Agree", array("name"=>"agree","class"=>'btn btn-primary'))!!}
                  {!!Form::submit("Disagree", array("name"=>"disagree","class"=>'btn btn-primary'))!!}
                  <br><br>
               </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@stop