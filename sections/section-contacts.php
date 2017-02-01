<section id="contacts" class="paragraph white">

    <div class="row">

        <div class="col-sm-12">

            <p class="title text-anim active">Register</p>

        </div>

    </div>

    <div class="row text-anim">

        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">

            <div class="col-sm-3">

            </div>


            <div class="col-sm-9">

                <p class="choose text-uppercase">

                    <span class="select active" data-id="#buyer">Buyer<span class="line"></span></span>
                    <span class="sep">/</span>
                    <span class="select" data-id="#broker">Broker<span class="line"></span></span>

                </p>

            </div>



        </div>



    </div>

    <form method="post">
      <div class="row text-anim form enabled" id="buyer">

          <div class="col-sm-2">

          </div>

          <div class="col-sm-8">

              <div class="form-group row">

                  <label form="firstName" class="col-sm-3 form-control-label">First Name *</label>

                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="first_name" id="firstName">
                  </div>

              </div>

              <div class="form-group row">

                  <label form="lastName" class="col-sm-3 form-control-label">Last Name *</label>

                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="last_name" id="lastName">
                  </div>

              </div>

              <div class="form-group row">

                  <label form="email" class="col-sm-3 form-control-label">E-mail *</label>

                  <div class="col-sm-9">
                      <input type="email" class="form-control" name="email_address" id="email">
                  </div>

              </div>

              <div class="form-group row">

                  <label form="phone" class="col-sm-3 form-control-label">Phone</label>

                  <div class="col-sm-4">
                      <input type="tel" class="form-control" name="phone" id="phone" placeholder="000 - 000 - 0000">
                  </div>

                  <div id="interests" class="col-sm-5 padding-left">

                      <select class="form-control" name="residence_type">
                          <option value="0">Residence Type:</option>
                          <option value="2 Bedroom">2 Bedroom</option>
                          <option value="3 Bedroom">3 Bedroom</option>
                          <option value="4 Bedroom">4 Bedroom</option>
                          <option value="5 Bedroom">5 Bedroom</option>
                      </select>

                  </div>


              </div>

              <div class="form-group row">

                  <label form="phone" class="col-sm-3 form-control-label"><em></em></label>

                  <div class="col-sm-4">

                      <select class="form-control" name="price_range">
                          <option value="0">Price Range:</option>
                          <option value="$4M to $6M">$4M to $6M</option>
                          <option value="3$6M to $10M">$6M to $10M</option>
                          <option value="$10M to $12M">$10M to $12M</option>
                          <option value="$12M+">$12M+</option>
                      </select>

                  </div>

                  <div id="interests" class="col-sm-5 padding-left">

                      <select class="form-control" name="how_did_you_hear_about_us">
                          <option value="0">How did you hear about us</option>
                          <option value="Broker">Broker</option>
                          <option value="Word of Mouth">Word of Mouth</option>
                          <option value="Online">Online</option>
                          <option value="Signage">Signage</option>
                          <option value="Press">Press</option>
                      </select>

                  </div>


              </div>

              <div class="form-group row">

                  <label form="email" class="col-sm-3 form-control-label">Message</label>

                  <div class="col-sm-9">
                      <textarea type="text" class="form-control" name="message" id="message"></textarea>

                      <p class="required">* Required Fileds</p>

                      <div class="row">

                          <!--
                          <p class="hover">I acknowledge that by submitting this form, I agree to be contacted by Brown Harris Stevens Development Marketing, LLC and its affiliates.</p>
                          -->

                          <div class="col-sm-8">



                          </div>

                          <div class="col-sm-4 text-right">

                              <button class="submit"><span>Register</span></button>

                          </div>

                      </div>


                  </div>



              </div>




          </div>


      </div>
    </form>

    <form method="post">

      <input type="hidden" name="agent_name" id="broker_agentName">
      <div class="row text-anim form hide" id="broker">

          <div class="col-sm-2">

          </div>

          <div class="col-sm-8">

              <div class="form-group row">

                  <label for="firstName" class="col-sm-3 form-control-label"><em>First Name *</em></label>

                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="broker_firstName">
                  </div>

              </div>

              <div class="form-group row">

                  <label for="lastName" class="col-sm-3 form-control-label"><em>Last Name *</em></label>

                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="broker_lastName">
                  </div>

              </div>

              <div class="form-group row">

                  <label for="brokerage" class="col-sm-3 form-control-label"><em>Brokerage agency *</em></label>

                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="broker_firm"  id="brokerage">
                  </div>

              </div>

              <div class="form-group row">

                  <label form="email" class="col-sm-3 form-control-label"><em>E-mail *</em></label>

                  <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" id="email">
                  </div>

              </div>

              <div class="form-group row">

                  <label form="phone" class="col-sm-3 form-control-label"><em>Phone</em></label>

                  <div class="col-sm-4">
                      <input type="tel" class="form-control" name="phone-number" id="phone" placeholder="000 - 000 - 0000">
                  </div>

                  <div id="interests" class="col-sm-5 padding-left">

                      <select class="form-control" name="how_did_you_hear_about_us">
                          <option value="0">How did you hear about us</option>
                          <option value="Broker<">Broker</option>
                          <option value="Word of Mout">Word of Mouth</option>
                          <option value="Online">Online</option>
                          <option value="Signage">Signage</option>
                          <option value="Press">Press</option>
                      </select>

                  </div>


              </div>


              <div class="form-group row">

                  <label form="email" class="col-sm-3 form-control-label"><em>Message</em></label>

                  <div class="col-sm-9">
                      <textarea type="text" class="form-control" name="message" id="message"></textarea>

                      <p class="required">* Required Fileds</p>

                      <div class="row">

                          <div class="col-sm-8">



                          </div>

                          <div class="col-sm-4 text-right">

                              <button><span><em>Submit</em></span></button>

                          </div>

                      </div>


                  </div>



              </div>




          </div>


      </div>
    </form>

    <div id="message-sent">

        <div id="message-table">

            <div id="message-content">

                <p class="message-title">Thank you for contacting us</p>
                <p class="message-desc"><span>An associate will be</span><br><span>in touch with you.</span></p>

            </div>

        </div>


    </div>

</section>
