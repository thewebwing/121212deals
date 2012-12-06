<div id="submit_deal_page">
    <h1>Submit a Deal for 12.12.12</h1>

    <?php // Change the css classes to suit your needs    

    $attributes = array('class' => 'form_box', 'id' => 'submit_deal_form');
    echo form_open('deals/submit', $attributes); ?>
            <div class="instructions"><p>Here is a really quick and easy way to get your deals in front of thousands of people celebrating 12.12.12 with Texas A&M University, The Association of Former Students, The Texas A&M Foundation and the 12th Man Foundation. We only <em>need</em> the three items with asterisks (*), but the more your fill out, the more likely it is that new customers will find your deal.</p>
                <p>We are only asking for an email in case there is an issue with your listing. This will not be displayed with your deal.</p>
            </div>
            <div class="input_area">
                <div class="deal_info">
                    <label for="business_name"> <span class="required">Business Name *</span>
                    <?php echo form_error('business_name'); ?>
                    <input id="business_name" type="text" title="Hello There" name="business_name" maxlength="128" value="<?php echo set_value('business_name'); ?>"  />
                    </label>

                    <label for="title"><span class="required">Deal Title *</span>
                    <?php echo form_error('title'); ?>
                    <input id="title" type="text" name="title" maxlength="128" value="<?php echo set_value('title'); ?>"  />
                    </label>

                    <label for="dealdescription"><span class="required">Deal Description *</span>
                    <?php echo form_error('description'); ?>
                    <?php echo form_textarea( array( 'name' => 'description', 'rows' => '8', 'cols' => '25', 'value' => set_value('description') ) )?>
                    </label>
                </div> <!-- .deal_info -->
                
                <div class="business_info">
                    
                    <label for="address_1"><span>Address 1</span>
                    <?php echo form_error('address_1'); ?>
                    <input id="address_1" type="text" name="address_1" maxlength="128" value="<?php echo set_value('address_1'); ?>"  />
                    </label>
                    
                    <label for="address_2"><span>Address 2</span>
                    <?php echo form_error('address_2'); ?>
                    <input id="address_2" type="text" name="address_2" maxlength="128" value="<?php echo set_value('address_2'); ?>"  />
                    </label>

                    <label for="city"><span>City</span>
                    <?php echo form_error('city'); ?>
                    <input id="city" type="text" name="city" maxlength="128" value="<?php echo set_value('city'); ?>"  />
                    </label>
                    
                    <label for="state"><span>State</span>
                    <?php echo form_error('state'); ?>
                    
                    <?php // Change the values in this array to populate your dropdown as required ?>
                    <?php $options = array(
                                                              'TX'  => 'Texas',
                                                              'AL'=>"Alabama",'AK'=>"Alaska",'AZ'=>"Arizona",'AR'=>"Arkansas",'CA'=>"California",'CO'=>"Colorado",'CT'=>"Connecticut",'DE'=>"Delaware",'DC'=>"District Of Columbia",'FL'=>"Florida",'GA'=>"Georgia",'HI'=>"Hawaii",'ID'=>"Idaho",'IL'=>"Illinois", 'IN'=>"Indiana", 'IA'=>"Iowa",  'KS'=>"Kansas",'KY'=>"Kentucky",'LA'=>"Louisiana",'ME'=>"Maine",'MD'=>"Maryland", 'MA'=>"Massachusetts",'MI'=>"Michigan",'MN'=>"Minnesota",'MS'=>"Mississippi",'MO'=>"Missouri",'MT'=>"Montana",'NE'=>"Nebraska",'NV'=>"Nevada",'NH'=>"New Hampshire",'NJ'=>"New Jersey",'NM'=>"New Mexico",'NY'=>"New York",'NC'=>"North Carolina",'ND'=>"North Dakota",'OH'=>"Ohio",'OK'=>"Oklahoma", 'OR'=>"Oregon",'PA'=>"Pennsylvania",'RI'=>"Rhode Island",'SC'=>"South Carolina",'SD'=>"South Dakota",'TN'=>"Tennessee",'TX'=>"Texas",'UT'=>"Utah",'VT'=>"Vermont",'VA'=>"Virginia",'WA'=>"Washington",'WV'=>"West Virginia",'WI'=>"Wisconsin",'WY'=>"Wyoming"
                                                            ); ?>

                    <?php echo form_dropdown('state', $options, set_value('state'))?>
                    </label>

                    <label for="zip_code"><span>Zip Code</span>
                    <?php echo form_error('zip_code'); ?>
                    <input id="zip_code" type="text" name="zip_code" maxlength="10" value="<?php echo set_value('zip_code'); ?>"  />
                    </label>

                    <label for="phone"><span>Phone</span>
                    <?php echo form_error('phone'); ?>
                    <input id="phone" type="text" name="phone" maxlength="20" value="<?php echo set_value('phone'); ?>"  />
                    </label>

                    <label for="email"><span>Email</span>
                    <?php echo form_error('email'); ?>
                    <input id="email" type="text" name="email" maxlength="128" value="<?php echo set_value('email'); ?>"  />
                    </label>
                </div><!-- .business_info -->
            </div><!-- input_area -->

            <?php $submit = array(
                'name' => 'submit',
                'value' => 'Submit',
                'type' => 'submit',
                'class' => 'button'
                
            );
            echo form_submit( $submit); ?>

    <?php echo form_close(); ?>
</div><!-- #submit_deal_page -->
