<?php
/*
Template Name: Home
*/
get_header();
?>

<section class="pb-[calc(var(--px)*93)] pt-[calc(var(--px)*171)]" id="top">
	<div class="container">
		<div class="mb-[calc(var(--px)*120)]">
			<h1 class="home_title text-[calc(var(--px)*75)] perspective-midrang leading-[129%] font_suisse text-center">
				<p>Every request clarified instantly.</p> 
				<p>Scope creep, contained.</p>
			</h1>
		</div>
		<div>
			<div class="flex max-w-[calc(var(--px)*945)] mx-auto content_top">
				<div class="w-[calc(var(--px)*433)]">
					<div class="pr-[calc(var(--px)*50)] font-medium">
						Boundr lives inside your project <br>
						emails and flags what’s in scope, <br>
						what’s not, and what needs a <br>
						decision.
					</div>
					<div class="mt-[calc(var(--px)*40)]">
						<a href="https://app.boundr.io/waitlist" target="_blank" class="btn_site min-w-[calc(var(--px)*247)]" data-button-rotate-hover data-button-rotate>
							<div class="button_bg"></div>
							<div class="button_label__wrap">
								<div class="button_label">
									<span>Join the waitlist</span>
								</div>

								<div class="button_label" aria-hidden="true">
									<span>Join the waitlist</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="w-[calc(100%-(var(--px)*433))]">
					<div class="aspect-[2.39]" id="slider_emails">
						<div class="item_email_anim absolute inset-0 flex items-center">
							<img class="max-w-full h-auto max-h-full w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/home_message_1.jpg" alt="">
						</div>
						<div class="item_email_anim absolute inset-0 flex items-center">
							<img class="max-w-full h-auto max-h-full w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/home_message_2.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-[calc(var(--px)*96)]">
			<div class="grid grid-cols-3 max-w-[calc(var(--px)*1114)] mx-auto">
				<div class="py-[calc(var(--px)*27)] px-[calc(var(--px)*40)] gap-[calc(var(--px)*23)] flex items-center">
					<div class="flex-none w-[calc(var(--px)*56)] h-[calc(var(--px)*56)] rounded-[calc(var(--px)*6)] bg-white flex items-center justify-center">
						<svg class="w-[calc(var(--px)*30)] h-auto" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M27.3279 5.18034C23.2003 4.04936 19.0484 2.28833 15.3211 0.0876707C15.1231 -0.0292236 14.8774 -0.0292236 14.6795 0.0876707C10.8447 2.35155 6.91712 4.01731 2.6723 5.18034C2.39809 5.2554 2.20801 5.50465 2.20801 5.78901V12.237C2.20801 18.877 5.27122 23.2722 7.84102 25.7901C10.6076 28.5009 13.8302 30 15.0003 30C16.1702 30 19.3929 28.5009 22.1594 25.7901C24.7292 23.2723 27.7922 18.8771 27.7922 12.237V5.78895C27.7922 5.50465 27.6021 5.2554 27.3279 5.18034ZM26.5301 12.2369C26.5301 18.4387 23.673 22.5399 21.2761 24.8885C18.5555 27.5542 15.6468 28.7378 15.0003 28.7378C14.3538 28.7378 11.4449 27.5542 8.72426 24.8885C6.32737 22.5399 3.47017 18.4387 3.47017 12.2369V6.26801C7.52942 5.11547 11.3098 3.50702 15.0004 1.36232C18.5989 3.45013 22.5678 5.13856 26.5301 6.26778V12.2369Z" fill="black"/>
							<path d="M9.40689 6.19731C9.27915 5.873 8.91277 5.71368 8.58839 5.84148C7.46105 6.28567 6.30394 6.69454 5.14924 7.05677C4.88609 7.13938 4.70703 7.38313 4.70703 7.65887V10.0958C4.70703 10.4444 4.98963 10.7269 5.33808 10.7269C5.68654 10.7269 5.96914 10.4444 5.96914 10.0958V8.12007C7.00501 7.78491 8.03978 7.41419 9.05105 7.01569C9.37536 6.88802 9.53468 6.52163 9.40689 6.19731Z" fill="black"/>
							<path d="M10.6052 6.31707C10.6898 6.31707 10.7758 6.30001 10.8582 6.26404L10.8698 6.259C11.1891 6.11908 11.3329 5.74742 11.193 5.42826C11.0529 5.10898 10.6792 4.96455 10.3602 5.10435L10.35 5.10875C10.0306 5.24826 9.88633 5.61963 10.0258 5.93896C10.1294 6.17603 10.3617 6.31707 10.6052 6.31707Z" fill="black"/>
							<path d="M22.519 20.3487C22.2274 20.1581 21.8363 20.24 21.6455 20.5318C21.1255 21.3277 20.5154 22.0899 19.832 22.797C19.2699 23.3783 18.6609 23.9202 18.0218 24.4074C17.7447 24.6187 17.6914 25.0147 17.9027 25.2919C18.0269 25.4547 18.2148 25.5404 18.4049 25.5404C18.5384 25.5404 18.6729 25.4982 18.7871 25.411C19.4765 24.8854 20.1333 24.301 20.7393 23.6742C21.4782 22.9099 22.1386 22.0849 22.7021 21.2221C22.8928 20.9303 22.8107 20.5393 22.519 20.3487Z" fill="black"/>
							<path d="M16.5563 25.3971L16.5201 25.4184C16.2185 25.5931 16.1155 25.9791 16.2901 26.2807C16.4071 26.4828 16.6189 26.5957 16.8368 26.5957C16.944 26.5957 17.0529 26.5683 17.1523 26.5106L17.1941 26.4861C17.4949 26.3099 17.5959 25.9234 17.4198 25.6226C17.2435 25.322 16.8569 25.2211 16.5563 25.3971Z" fill="black"/>
							<path d="M10.6983 13.7121C10.3108 13.3246 9.79549 13.1113 9.2474 13.1113C8.69932 13.1113 8.18393 13.3246 7.79627 13.7121C6.99629 14.5123 6.99629 15.8142 7.79627 16.6143L11.5226 20.3405C11.9101 20.7279 12.4255 20.9413 12.9736 20.9413C13.5218 20.9413 14.0371 20.7279 14.4247 20.3404L22.2036 12.5614C23.0035 11.761 23.0035 10.4593 22.2035 9.65941C21.816 9.27187 21.3006 9.05859 20.7524 9.05859C20.2043 9.05859 19.689 9.27193 19.3014 9.65941L12.9735 15.9872L10.6983 13.7121ZM20.1939 10.5519C20.343 10.4028 20.5414 10.3207 20.7525 10.3207C20.9637 10.3207 21.162 10.4028 21.3112 10.5519C21.6191 10.8598 21.6191 11.361 21.3111 11.6691L13.5322 19.4479C13.3831 19.5971 13.1847 19.6792 12.9736 19.6792C12.7626 19.6792 12.5641 19.5971 12.4149 19.4479L8.68871 15.7219C8.38069 15.4138 8.38069 14.9126 8.6886 14.6047C8.83777 14.4556 9.03623 14.3734 9.24734 14.3734C9.45846 14.3734 9.6568 14.4555 9.80592 14.6046L12.5273 17.326C12.6457 17.4443 12.8061 17.5108 12.9735 17.5108C13.141 17.5108 13.3014 17.4444 13.4197 17.326L20.1939 10.5519Z" fill="black"/>
						</svg>
					</div>
					<div class="text_base font-medium">
						Protect your margins
					</div>
				</div>
				<div class="py-[calc(var(--px)*27)] px-[calc(var(--px)*40)] gap-[calc(var(--px)*23)] flex items-center">
					<div class="flex-none w-[calc(var(--px)*56)] h-[calc(var(--px)*56)] rounded-[calc(var(--px)*6)] bg-white flex items-center justify-center">
						<svg class="w-[calc(var(--px)*30)] h-auto" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.9229 14.7172C19.4872 13.2977 23.7891 10.1528 23.7891 5.03906V3.51562C24.4352 3.51562 24.9609 2.98992 24.9609 2.34375V1.17188C24.9609 0.525703 24.4352 0 23.7891 0H6.21094C5.56477 0 5.03906 0.525703 5.03906 1.17188V2.34375C5.03906 2.98992 5.56477 3.51562 6.21094 3.51562V5.03906C6.21094 10.1528 10.5128 13.2977 13.0771 14.7173C13.1789 14.7736 13.2422 14.8819 13.2422 15C13.2422 15.1181 13.1789 15.2264 13.0771 15.2828C12.2981 15.714 11.5587 16.1937 10.8796 16.7085C10.6217 16.9039 10.5711 17.2714 10.7665 17.5294C10.8818 17.6814 11.0568 17.7614 11.2339 17.7614C11.3572 17.7614 11.4816 17.7226 11.5874 17.6424C12.2222 17.1613 12.9144 16.7123 13.6446 16.308C14.0698 16.0727 14.3499 15.6459 14.4039 15.1684C14.5907 15.1969 14.7897 15.2135 14.9999 15.2135C15.0104 15.2135 15.021 15.2135 15.0316 15.2134C15.2303 15.2118 15.4187 15.1951 15.5962 15.168C15.65 15.6457 15.9302 16.0727 16.3554 16.308C18.6939 17.6026 22.6172 20.4482 22.6172 24.9609V26.4844H21.1355C18.8395 23.7931 15.6337 23.6531 15 23.6531C11.6791 23.6531 9.56414 25.6917 8.86758 26.4844H7.38281V24.9609C7.38281 23.5467 7.77205 22.1843 8.53969 20.9118C8.70686 20.6347 8.61773 20.2746 8.34064 20.1074C8.06355 19.9403 7.70344 20.0294 7.53627 20.3065C6.65684 21.7642 6.21094 23.3302 6.21094 24.9609V26.4844C5.56477 26.4844 5.03906 27.0101 5.03906 27.6562V28.8281C5.03906 29.4743 5.56477 30 6.21094 30H23.7891C24.4352 30 24.9609 29.4743 24.9609 28.8281V27.6562C24.9609 27.0101 24.4352 26.4844 23.7891 26.4844V24.9609C23.7891 19.8472 19.4872 16.7023 16.9229 15.2827C16.8211 15.2264 16.7578 15.1181 16.7578 15C16.7578 14.8819 16.8211 14.7736 16.9229 14.7172ZM15 24.8249C15.4743 24.8249 17.6346 24.9168 19.4821 26.4844H10.5437C11.4513 25.7261 12.9586 24.8249 15 24.8249ZM23.7898 28.8281C23.7898 28.8281 23.7896 28.8281 23.7891 28.8281H6.21094V27.6562H23.7891L23.7898 28.8281ZM6.21094 1.17188H23.7891L23.7898 2.34375C23.7898 2.34375 23.7896 2.34375 23.7891 2.34375H6.21094V1.17188ZM7.38281 3.51562H22.6172V5.03906C22.6172 6.23344 22.3423 7.31098 21.8947 8.27396C20.8507 8.03637 19.7825 7.91602 18.7125 7.91602C17.4012 7.91602 16.0958 8.09607 14.8326 8.45115C13.673 8.77723 12.4743 8.94258 11.2699 8.94258C10.2576 8.94258 9.24709 8.82387 8.26184 8.59248C7.72271 7.55033 7.38281 6.36697 7.38281 5.03906V3.51562ZM15.0222 14.0416C14.416 14.0465 13.9379 13.8539 13.6441 13.6917C12.3132 12.955 10.4696 11.7156 9.12762 9.95291C9.83625 10.06 10.5527 10.1145 11.2699 10.1145C12.5815 10.1145 13.8869 9.93439 15.1497 9.57932C16.3097 9.25324 17.5083 9.08789 18.7124 9.08789C19.581 9.08789 20.4482 9.17455 21.3 9.34523C19.9467 11.4338 17.8346 12.873 16.3557 13.6917C16.0716 13.8486 15.6094 14.037 15.0222 14.0416Z" fill="black"/>
							<path d="M15 18.8608C15.3236 18.8608 15.5859 18.5985 15.5859 18.2749V17.689C15.5859 17.3654 15.3236 17.103 15 17.103C14.6764 17.103 14.4141 17.3654 14.4141 17.689V18.2749C14.4141 18.5985 14.6764 18.8608 15 18.8608Z" fill="black"/>
							<path d="M14.4141 21.55C14.4141 21.8737 14.6764 22.136 15 22.136C15.3236 22.136 15.5859 21.8737 15.5859 21.55V20.9641C15.5859 20.6405 15.3236 20.3782 15 20.3782C14.6764 20.3782 14.4141 20.6405 14.4141 20.9641V21.55Z" fill="black"/>
							<path d="M9.47852 19.3215C9.80212 19.3215 10.0645 19.0592 10.0645 18.7356C10.0645 18.412 9.80212 18.1497 9.47852 18.1497C9.15491 18.1497 8.89258 18.412 8.89258 18.7356C8.89258 19.0592 9.15491 19.3215 9.47852 19.3215Z" fill="black"/>
						</svg>
					</div>
					<div class="text_base font-medium">
						Protect your team’s time
					</div>
				</div>
				<div class="py-[calc(var(--px)*27)] px-[calc(var(--px)*40)] gap-[calc(var(--px)*23)] flex items-center">
					<div class="flex-none w-[calc(var(--px)*56)] h-[calc(var(--px)*56)] rounded-[calc(var(--px)*6)] bg-white flex items-center justify-center">
						<svg class="w-[calc(var(--px)*32)] h-auto" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M27.7466 15.5068C27.4746 15.5527 27.291 15.8105 27.3369 16.083C27.4453 16.7236 27.5 17.3682 27.5 18C27.5 21.5242 25.9292 24.7053 23.3983 26.8234C22.9563 23.9535 20.9187 21.6517 18.213 20.8279C19.2887 20.1104 20 18.8877 20 17.5C20 15.2939 18.2056 13.5 16 13.5C13.7944 13.5 12 15.2939 12 17.5C12 18.8877 12.7113 20.1104 13.787 20.8279C11.0813 21.6517 9.0437 23.9535 8.60169 26.8234C6.0708 24.7053 4.5 21.5242 4.5 18C4.5 17.3682 4.55469 16.7236 4.66309 16.083C4.70898 15.8105 4.52539 15.5527 4.25342 15.5068C3.9751 15.46 3.72314 15.6445 3.67676 15.917C3.55957 16.6113 3.5 17.3125 3.5 18C3.5 24.1406 7.88574 29.3232 13.9282 30.3232C13.9556 30.3281 13.9834 30.3301 14.0103 30.3301C14.2505 30.3301 14.4624 30.1562 14.5029 29.9121C14.5483 29.6396 14.3638 29.3818 14.0913 29.3369C12.4064 29.058 10.8651 28.421 9.53021 27.5174C9.77142 24.1242 12.5601 21.5 16 21.5C19.4399 21.5 22.2286 24.1242 22.4698 27.5174C21.1349 28.421 19.5936 29.058 17.9087 29.3369C17.6362 29.3818 17.4517 29.6396 17.4971 29.9121C17.5376 30.1562 17.7495 30.3301 17.9897 30.3301C18.0166 30.3301 18.0444 30.3281 18.0718 30.3232C24.1143 29.3232 28.5 24.1406 28.5 18C28.5 17.3125 28.4404 16.6113 28.3232 15.917C28.2769 15.6445 28.022 15.459 27.7466 15.5068ZM13 17.5C13 15.8457 14.3457 14.5 16 14.5C17.6543 14.5 19 15.8457 19 17.5C19 19.1543 17.6543 20.5 16 20.5C14.3457 20.5 13 19.1543 13 17.5Z" fill="black"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M21.4756 5.47852C21.4165 5.29688 21.2602 5.16504 21.0718 5.1377L17.8769 4.67383L16.4482 1.77832C16.2803 1.43848 15.7197 1.43848 15.5517 1.77832L14.123 4.67383L10.9282 5.1377C10.7397 5.16504 10.5835 5.29688 10.5244 5.47852C10.4658 5.65918 10.5146 5.8584 10.6509 5.99121L12.9629 8.24414L12.417 11.4258C12.3847 11.6143 12.4619 11.8037 12.6157 11.915C12.7705 12.0273 12.9741 12.0439 13.1426 11.9531L16 10.4502L18.8574 11.9531C18.9306 11.9922 19.0107 12.0107 19.0903 12.0107C19.1938 12.0107 19.2969 11.9785 19.3843 11.915C19.5381 11.8037 19.6152 11.6143 19.583 11.4258L19.0371 8.24414L21.3491 5.99121C21.4853 5.8584 21.5342 5.65918 21.4756 5.47852ZM18.1509 7.71094C18.0332 7.82617 17.9795 7.99121 18.0073 8.1543L18.4262 10.5967L16.2329 9.44336C16.1596 9.40527 16.0801 9.38574 16 9.38574C15.9199 9.38574 15.8403 9.40527 15.7671 9.44336L13.5737 10.5967L13.9927 8.1543C14.0205 7.99121 13.9668 7.82617 13.8491 7.71094L12.0747 5.98242L14.5268 5.62598C14.6899 5.60156 14.8305 5.5 14.9033 5.35254L16 3.12988L17.0967 5.35254C17.1694 5.5 17.31 5.60156 17.4731 5.62598L19.9253 5.98242L18.1509 7.71094Z" fill="black"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M4.03513 13.5234C4.00291 13.7119 4.08006 13.9014 4.23387 14.0127C4.38914 14.125 4.59324 14.1406 4.76072 14.0508L6.99998 12.873L9.23924 14.0508C9.31248 14.0898 9.39256 14.1084 9.47215 14.1084C9.57566 14.1084 9.67869 14.0762 9.76609 14.0127C9.9199 13.9014 9.99705 13.7119 9.96482 13.5234L9.53709 11.0303L11.3491 9.26465C11.4853 9.13184 11.5342 8.93262 11.4756 8.75195C11.4165 8.57031 11.2602 8.43848 11.0718 8.41113L8.56785 8.04785L7.44822 5.77832C7.28025 5.43848 6.71971 5.43848 6.55174 5.77832L5.43211 8.04785L2.9282 8.41113C2.73972 8.43848 2.58347 8.57031 2.52439 8.75195C2.4658 8.93262 2.51463 9.13184 2.65086 9.26465L4.46287 11.0303L4.03513 13.5234ZM4.07469 9.25586L5.83592 9C5.999 8.97559 6.13963 8.87402 6.21238 8.72656L6.99998 7.12988L7.78758 8.72656C7.86033 8.87402 8.00096 8.97559 8.16404 9L9.92527 9.25586L8.65086 10.4971C8.53318 10.6123 8.47947 10.7773 8.5073 10.9404L8.80808 12.6943L7.23289 11.8662C7.15965 11.8281 7.08006 11.8086 6.99998 11.8086C6.9199 11.8086 6.84031 11.8281 6.76707 11.8662L5.19187 12.6943L5.49265 10.9404C5.52049 10.7773 5.46678 10.6123 5.3491 10.4971L4.07469 9.25586Z" fill="black"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M29.0718 8.41113L26.5678 8.04785L25.4482 5.77832C25.2803 5.43848 24.7197 5.43848 24.5517 5.77832L23.4321 8.04785L20.9282 8.41113C20.7397 8.43848 20.5835 8.57031 20.5244 8.75195C20.4658 8.93262 20.5146 9.13184 20.6509 9.26465L22.4629 11.0303L22.0351 13.5234C22.0029 13.7119 22.0801 13.9014 22.2339 14.0127C22.3887 14.125 22.5923 14.1406 22.7607 14.0508L25 12.873L27.2392 14.0508C27.3125 14.0898 27.3926 14.1084 27.4721 14.1084C27.5757 14.1084 27.6787 14.0762 27.7661 14.0127C27.9199 13.9014 27.997 13.7119 27.9648 13.5234L27.5371 11.0303L29.3491 9.26465C29.4853 9.13184 29.5342 8.93262 29.4756 8.75195C29.4165 8.57031 29.2602 8.43848 29.0718 8.41113ZM26.6509 10.4971C26.5332 10.6123 26.4795 10.7773 26.5073 10.9404L26.8081 12.6943L25.2329 11.8662C25.1596 11.8281 25.0801 11.8086 25 11.8086C24.9199 11.8086 24.8403 11.8281 24.7671 11.8662L23.1919 12.6943L23.4927 10.9404C23.5205 10.7773 23.4668 10.6123 23.3491 10.4971L22.0747 9.25586L23.8359 9C23.999 8.97559 24.1396 8.87402 24.2124 8.72656L25 7.12988L25.7876 8.72656C25.8603 8.87402 26.001 8.97559 26.164 9L27.9253 9.25586L26.6509 10.4971Z" fill="black"/>
							<path d="M16 30.5C16.2761 30.5 16.5 30.2761 16.5 30C16.5 29.7239 16.2761 29.5 16 29.5C15.7239 29.5 15.5 29.7239 15.5 30C15.5 30.2761 15.7239 30.5 16 30.5Z" fill="black"/>
						</svg>
					</div>
					<div class="text_base font-medium">
						Keep clients aligned
					</div>
				</div>
			</div>
		</div>
		<div class="mt-[calc(var(--px)*130)]" id="mission">
			<div class="max-w-[calc(var(--px)*660)] ml-auto">
				<div class="mb-[calc(var(--px)*40)]">
					<div class="label"> 
						OUR MISSION
					</div>
				</div>
				<div class="text-[calc(var(--px)*28)] leading-[128%] space-y-[calc(var(--px)*37)] font_suisse">
					<p>
						Boundr exists to bring clarity and fairness to project scope.
					</p>
					<p>
						Agreements should not rely on memory. Work should not depend on assumptions. Alignment should not require constant renegotiation.
					</p>
					<p>
						Boundr turns static agreements into a living, shared reference — so teams and clients stay aligned without friction.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="my-[calc(var(--px)*130)]">
	<div class="container">
		<div class="flex">
			<div class="w-[calc(100%-(var(--px)*660))] pr-[calc(var(--px)*100)]">
				<div class="sticky top_sticky_section">
					<div class="mb-[calc(var(--px)*40)]">
						<div class="label"> 
							THE PROBLEM
						</div>
					</div>
					<div>
						<h2 class="heading_h2 font_suisse">
							The hidden cost of <br>
							loose scope
						</h2>
					</div>
				</div>
			</div>
			<div class="w-[calc(var(--px)*660)]">
				<div class="space-y-[calc(var(--px)*16)] mt-[calc(var(--px)*100)]" id="wrapper_problem">
					<div class="item_problem rounded-[calc(var(--px)*5)] min-h-[calc(var(--px)*154)] px-[calc(var(--px)*40)] text-center flex items-center justify-center bg-white">
						<div>
							The <strong>contract</strong> fades into the background
						</div>
					</div>
					<div class="item_problem rounded-[calc(var(--px)*5)] min-h-[calc(var(--px)*154)] px-[calc(var(--px)*40)] text-center flex items-center justify-center bg-[#F8F5F5]">
						<div>
							Misunderstandings <strong>start</strong> to occur
						</div>
					</div>
					<div class="item_problem rounded-[calc(var(--px)*5)] min-h-[calc(var(--px)*154)] px-[calc(var(--px)*40)] text-center flex items-center justify-center bg-white">
						<div>
							Your team <strong>absorbs</strong>, without proof
						</div>
					</div>
					<div class="item_problem rounded-[calc(var(--px)*5)] min-h-[calc(var(--px)*154)] px-[calc(var(--px)*40)] text-center flex items-center justify-center bg-[#F8F5F5]">
						<div>
							Extra <strong>hours</strong> vanish into goodwill.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mt-[calc(var(--px)*100)]">
	<div class="mb-[calc(var(--px)*40)]" id="solution">
		<div class="container">
			<div class="mb-[calc(var(--px)*40)]">
				<div class="label"> 
					The solution
				</div>
			</div>
			<div>
				<h2 class="heading_h2 font_suisse">
					What Boundr <br>
					Does
				</h2>
			</div>
		</div>
	</div>
	<div class="bg-dark text-white overflow-hidden">
		<div class="grid grid-cols-3 -mx-px relative z-[1]">
			<div class="border-r border-r-[calc(var(--px)*0.5)] border-white/40 item_solution">
				<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
				<div class="py-[calc(var(--px)*56)] pr-[calc(var(--px)*30)] pl-[calc(var(--px)*77)] min-h-[calc(var(--px)*364)] flex flex-wrap flex-col min-h-full justify-between">
					<div class="relative min-h-[calc(var(--px)*170)] mb-[calc(var(--px)*39)]">
						<div class="heading_h3 font_suisse">
							Eliminates <br>
							Scope guesswork
						</div>
						<div class="absolute -left-[calc(var(--px)*31)] top-[calc(var(--px)*8)] text-[calc(var(--px)*14)]">1</div>
					</div>
					<div class="text_base">
						Surfaces gaps and grey areas <br>
						before clients do.
					</div>
				</div>
			</div>
			<div class="border-r border-r-[0.5px] border-white/40 item_solution">
				<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
				<div class="py-[calc(var(--px)*56)] pr-[calc(var(--px)*30)] pl-[calc(var(--px)*77)] min-h-[calc(var(--px)*364)] flex flex-wrap flex-col min-h-full justify-between">
					<div class="relative min-h-[calc(var(--px)*170)] mb-[calc(var(--px)*39)]">
						<div class="heading_h3 font_suisse">
							Understands client requests automatically
						</div>
						<div class="absolute -left-[calc(var(--px)*31)] top-[calc(var(--px)*8)] text-[calc(var(--px)*14)]">2</div>
					</div>
					<div class="text_base">
						Surfaces gaps and grey areas <br>
						before clients do.
					</div>
				</div>
			</div>
			<div class="border-r border-r-[0.5px] border-white/40 item_solution">
				<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
				<div class="py-[calc(var(--px)*56)] pr-[calc(var(--px)*30)] pl-[calc(var(--px)*77)] min-h-[calc(var(--px)*364)] flex flex-wrap flex-col min-h-full justify-between">
					<div class="relative min-h-[calc(var(--px)*170)] mb-[calc(var(--px)*39)]">
						<div class="heading_h3 font_suisse">
							Shows what’s in scope — instantly
						</div>
						<div class="absolute -left-[calc(var(--px)*31)] top-[calc(var(--px)*8)] text-[calc(var(--px)*14)]">3</div>
					</div>
					<div class="text_base">
						Each request compared against <br>
						what was agreed.
					</div>
				</div>
			</div>
			<div class="border-r border-r-[0.5px] border-white/40 item_solution">
				<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
				<div class="p-[calc(var(--px)*50)] min-h-[calc(var(--px)*364)] flex items-center min-h-full justify-center">
					<svg class="anim_star_decor w-[calc(var(--px)*165)] h-auto" width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill="#1B434B" d="M64.0014 19.1942L45.7514 0.956388C44.4753 -0.318796 42.4057 -0.318796 41.1297 0.956388L35.7618 6.32297C33.9492 8.13437 31.0116 8.13437 29.199 6.32297L23.8288 0.956388C22.5527 -0.318796 20.4831 -0.318796 19.2071 0.956388L0.957029 19.1942C-0.31901 20.4694 -0.31901 22.5376 0.957029 23.8128L6.32946 29.1817C8.14207 30.9931 8.14207 33.9287 6.32946 35.7378L0.957029 41.1044C-0.31901 42.3796 -0.31901 44.4478 0.957029 45.723L19.2071 63.9609C20.4831 65.236 22.5527 65.236 23.8288 63.9609L29.2012 58.5943C31.0138 56.7851 33.9492 56.7851 35.7618 58.5943L41.1297 63.9586C42.4057 65.2338 44.4753 65.2338 45.7514 63.9586L64.0014 45.7208C65.2775 44.4456 65.2775 42.3773 64.0014 41.1022L58.629 35.7356C56.8164 33.9242 56.8164 30.9886 58.629 29.1794L64.0014 23.8106C65.2797 22.5376 65.2797 20.4694 64.0014 19.1942ZM54.9609 32.7166C43.6074 34.4401 34.4699 43.5737 32.752 54.8971L32.4815 55.172L32.2222 54.9242C31.3678 49.3143 28.7841 44.218 24.7463 40.1897C20.7131 36.1546 15.6157 33.5705 10.0268 32.7324L9.75628 32.462L10.0155 32.2029C21.3579 30.4681 30.484 21.3481 32.22 10.0133L32.4837 9.75426L32.743 10.0133C33.6042 15.6165 36.1879 20.706 40.2166 24.732C44.2454 28.7626 49.3383 31.3468 54.9474 32.2007L55.2067 32.4598L54.9609 32.7166Z" />
					</svg>
				</div>
			</div>
			<div class="border-r border-r-[0.5px] border-white/40 item_solution">
				<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
				<div class="py-[calc(var(--px)*56)] pr-[calc(var(--px)*30)] pl-[calc(var(--px)*77)] min-h-[calc(var(--px)*364)] flex flex-wrap flex-col min-h-full justify-between">
					<div class="relative min-h-[calc(var(--px)*170)] mb-[calc(var(--px)*39)]">
						<div class="heading_h3 font_suisse">
							Explains scope decisions clearly
						</div>
						<div class="absolute -left-[calc(var(--px)*31)] top-[calc(var(--px)*8)] text-[calc(var(--px)*14)]">4</div>
					</div>
					<div class="text_base">
						Client-safe explanations, received <br>
						in your email, ready to send.
					</div>
				</div>
			</div>
			<div class="border-r border-r-[0.5px] border-white/40 item_solution">
				<div class="follow_active_cars bg-primary absolute top-0 left-0 z-[-1]"></div>
				<div class="py-[calc(var(--px)*56)] pr-[calc(var(--px)*30)] pl-[calc(var(--px)*77)] min-h-[calc(var(--px)*364)] flex flex-wrap flex-col min-h-full justify-between">
					<div class="relative min-h-[calc(var(--px)*170)] mb-[calc(var(--px)*39)]">
						<div class="heading_h3 font_suisse">
							Stops scope drift <br>
							early
						</div>
						<div class="absolute -left-[calc(var(--px)*31)] top-[calc(var(--px)*8)] text-[calc(var(--px)*14)]">5</div>
					</div>
					<div class="text_base">
						Flags issues before they become <br>
						awkward.
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-[calc(var(--px)*130)]">
	<div class="container">
		<div class="mb-[calc(var(--px)*110)] flex gap-[calc(var(--px)*40)]" id="how_works">
			<div class="label flex-none">
				HOW IT WORKS
			</div>
			<div class="-mt-[calc(var(--px)*15)]">
				<h2 class="heading_h2 font_suisse">
					Start protecting <br>
					scope in minutes
				</h2>
			</div>
		</div>
		<div class="grid grid-cols-3 gap-[calc(var(--px)*50)]">
			<div>
				<div class="heading_h3 font_suisse min-h-[calc(var(--px)*84)] mb-[calc(var(--px)*27)]">
					Define your scope once 
				</div>
				<div class="text_base">
					Upload your proposal. Boundr clarifies grey areas <br>
					and creates a reference everyone understands.
				</div>
				<div class="mt-[calc(var(--px)*65)] max-w-[calc(var(--px)*312)] mx-auto">
					<img class="remove_bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/how_works_1.png" alt="">
				</div>
			</div>
			<div>
				<div class="heading_h3 font_suisse min-h-[calc(var(--px)*84)] mb-[calc(var(--px)*27)]">
					Boundr tracks your project
				</div>
				<div class="text_base">
					Keep Boundr in your email CC. It flags scope drift and <br>
					explains it instantly.					
				</div>
				<div class="mt-[calc(var(--px)*65)] max-w-[calc(var(--px)*312)] mx-auto">
					<img class="remove_bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/how_works_2.png" alt="">
				</div>
			</div>
			<div>
				<div class="heading_h3 font_suisse min-h-[calc(var(--px)*84)] mb-[calc(var(--px)*27)]">
					See project scope health
				</div>
				<div class="text_base">
					Track what’s included, what’s drifting, and the impact <br>
					— in one calm view.
				</div>
				<div class="mt-[calc(var(--px)*65)] max-w-[calc(var(--px)*312)] mx-auto">
					<img class="remove_bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/how_works_3.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-dark text-white pt-[calc(var(--px)*92)] pb-[calc(var(--px)*155)]">
	<div class="container">
		<div class="mb-[calc(var(--px)*100)]" id="features">
			<div class="mb-[calc(var(--px)*40)]">
				<div class="label"> 
					FEATURES
				</div>
			</div>
			<div>
				<h2 class="heading_h3 font_suisse">
					No change on your <br>
					communication workflow
				</h2>
			</div>
		</div>
		<div>
			<div class="flex">
				<div class="w-[calc(var(--px)*806)] pr-[calc(var(--px)*80)]">
					<div class="min-h-[calc(var(--px)*631)] relative" id="gallery--zoom-transition" data-barba-prevent="all">
						<div class="item_img_feature absolute inset-0" data-id="1">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/feature_1.png" class="h-full max-w-full flex items-center justify-center">
								<img class="max-w-full max-h-full w-auto mx-auto h-auto rounded-[calc(var(--px)*8)]" src="<?php echo get_template_directory_uri(); ?>/assets/img/feature_1.png" alt="">
							</a>
						</div>
						<div class="item_img_feature absolute inset-0" data-id="2">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/feature_2.png" class="h-full max-w-full flex items-center justify-center">
								<img class="max-w-full max-h-full w-auto mx-auto h-auto rounded-[calc(var(--px)*8)]" src="<?php echo get_template_directory_uri(); ?>/assets/img/feature_2.png" alt="">
							</a>
						</div>
						<div class="item_img_feature absolute inset-0" data-id="3">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/feature_1.png" class="h-full max-w-full flex items-center justify-center">
								<img class="max-w-full max-h-full w-auto mx-auto h-auto rounded-[calc(var(--px)*8)]" src="<?php echo get_template_directory_uri(); ?>/assets/img/feature_1.png" alt="">
							</a>
						</div>
						<div class="item_img_feature absolute inset-0" data-id="4">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/feature_2.png" class="h-full max-w-full flex items-center justify-center">
								<img class="max-w-full max-h-full w-auto mx-auto h-auto rounded-[calc(var(--px)*8)]" src="<?php echo get_template_directory_uri(); ?>/assets/img/feature_2.png" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="w-[calc(100%-(var(--px)*806))] pr-[calc(var(--px)*60)] flex items-center accordion_feature">
					<div class="space-y-[calc(var(--px)*30)] w-full">
						<div class="js_accordion__group">
							<div class="js_accordion__menu" data-id="1">
								<div class="inside_toggl_acr font_suisse">
									Handle scope decisions right <br>
									from your inbox
								</div>
								<span class="counter_feature">01</span>
							</div>
							<div class="h-0 overflow-hidden js_accordion__content">
								<div class="space-y-[calc(var(--px)*18)] pl-[calc(var(--px)*72)] pt-[calc(var(--px)*69)] pb-[calc(var(--px)*69)] text-white/70">
									<p>
										Boundr stays in the loop through your <br>
										emails and quietly checks requests <br>
										as they happen.
									</p>
									<p>
										You don’t need to remember scope <br>
										details, revision limits, or contract <br>
										terms — clarity is always there when <br>
										you need it.
									</p>
								</div>
							</div>
						</div>
						<div class="js_accordion__group">
							<div class="js_accordion__menu" data-id="2">
								<div class="inside_toggl_acr font_suisse">
									Email Notifications
								</div>
								<span class="counter_feature">02</span>
							</div>
							<div class="h-0 overflow-hidden js_accordion__content">
								<div class="space-y-[calc(var(--px)*18)] pl-[calc(var(--px)*72)] pb-[calc(var(--px)*69)] pt-[calc(var(--px)*69)] text-white/70">
									<p>
										Boundr stays in the loop through your <br>
										emails and quietly checks requests <br>
										as they happen.
									</p>
									<p>
										You don’t need to remember scope <br>
										details, revision limits, or contract <br>
										terms — clarity is always there when <br>
										you need it.
									</p>
								</div>
							</div>
						</div>
						<div class="js_accordion__group">
							<div class="js_accordion__menu" data-id="3">
								<div class="inside_toggl_acr font_suisse">
									Explanation Ready
								</div>
								<span class="counter_feature">03</span>
							</div>
							<div class="h-0 overflow-hidden js_accordion__content">
								<div class="space-y-[calc(var(--px)*18)] pl-[calc(var(--px)*72)] pb-[calc(var(--px)*69)] pt-[calc(var(--px)*69)] text-white/70">
									<p>
										Boundr stays in the loop through your <br>
										emails and quietly checks requests <br>
										as they happen.
									</p>
									<p>
										You don’t need to remember scope <br>
										details, revision limits, or contract <br>
										terms — clarity is always there when <br>
										you need it.
									</p>
								</div>
							</div>
						</div>
						<div class="js_accordion__group">
							<div class="js_accordion__menu" data-id="4">
								<div class="inside_toggl_acr font_suisse">
									Analytics Dashboard
								</div>
								<span class="counter_feature">04</span>
							</div>
							<div class="h-0 overflow-hidden js_accordion__content">
								<div class="space-y-[calc(var(--px)*18)] pl-[calc(var(--px)*72)] pb-[calc(var(--px)*69)] pt-[calc(var(--px)*69)] text-white/70">
									<p>
										You don’t need to remember scope <br>
										details, revision limits, or contract <br>
										terms — clarity is always there when <br>
										you need it.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mt-[calc(var(--px)*150)] mb-[calc(var(--px)*130)]">
	<div class="container">
		<div class="flex">
			<div class="w-[calc(var(--px)*457)] pr-[calc(var(--px)*50)]">
				<div class="sticky top_sticky_section">
					<h2 class="heading_h3 bigger font_suisse">
						Experience the <br>
						benefits	
					</h2>
					<div class="mt-[calc(var(--px)*100)]">
						<a href="https://app.boundr.io/waitlist" target="_blank" class="btn_site min-w-[calc(var(--px)*247)]" data-button-rotate-hover data-button-rotate>
							<div class="button_bg"></div>
							<div class="button_label__wrap">
								<div class="button_label">
									<span>Join the waitlist</span>
								</div>

								<div class="button_label" aria-hidden="true">
									<span>Join the waitlist</span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="w-[calc(100%-(var(--px)*457))]">
				<div class="group_line_item flex items-center relative mb-[calc(var(--px)*68)] last:mb-0 pb-[calc(var(--px)*68)] relative">
					<div class="line_item_group h-px bg-gray absolute left-0 bottom-0"></div>
					<div class="flex-1">
						<div class="heading_h4 font-semibold min-h-[calc(var(--px)*87)]">
							Peace of mind
						</div>
						<div class="text_base mt-[calc(var(--px)*11)]">
							No more second-guessing whether a <br>
							request is in scope. <br>
							Your team moves forward with clarity as <br>
							the project evolves.
						</div>
					</div>
					<div class="w-[calc(var(--px)*243)] flex-none ml-[calc(var(--px)*20)]">
						<img class="remove_bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/how_benefit_1.png" alt="">
					</div>
				</div>
				<div class="group_line_item flex items-center relative mb-[calc(var(--px)*68)] last:mb-0 pb-[calc(var(--px)*68)] relative">
					<div class="line_item_group h-px bg-gray absolute left-0 bottom-0"></div>
					<div class="flex-1">
						<div class="heading_h4 font-semibold min-h-[calc(var(--px)*87)]">
							Work clarity
						</div>
						<div class="text_base mt-[calc(var(--px)*11)]">
							See the real effort behind incoming <br>
							requests before saying yes.
						</div>
					</div>
					<div class="w-[calc(var(--px)*243)] flex-none ml-[calc(var(--px)*20)]">
						<img class="remove_bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/how_benefit_2.png" alt="">
					</div>
				</div>
				<div class="group_line_item flex items-center relative mb-[calc(var(--px)*68)] last:mb-0 pb-[calc(var(--px)*68)] relative">
					<div class="line_item_group h-px bg-gray absolute left-0 bottom-0"></div>
					<div class="flex-1">
						<div class="heading_h4 font-semibold min-h-[calc(var(--px)*87)]">
							Margin protection
						</div>
						<div class="text_base mt-[calc(var(--px)*11)]">
							Spot when “small changes” start adding <br>
							up — before they eat into your time and <br>
							margins..
						</div>
					</div>
					<div class="w-[calc(var(--px)*243)] flex-none ml-[calc(var(--px)*20)]">
						<img class="remove_bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/how_benefit_3.png" alt="">
					</div>
				</div>
				<div class="group_line_item flex items-center relative mb-[calc(var(--px)*68)] last:mb-0 pb-[calc(var(--px)*68)] relative">
					<div class="line_item_group h-px bg-gray absolute left-0 bottom-0"></div>
					<div class="flex-1">
						<div class="heading_h4 font-semibold min-h-[calc(var(--px)*87)]">
							Project alignement
						</div>
						<div class="text_base mt-[calc(var(--px)*11)]">
							Boundr acts as the neutral reference — <br>
							so decisions feel fair for both teams and <br>
							clients.
						</div>
					</div>
					<div class="w-[calc(var(--px)*243)] flex-none ml-[calc(var(--px)*20)]">
						<img class="remove_bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/how_benefit_4.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="my-[calc(var(--px)*130)]">
	<div class="container">
		<div class="mb-[calc(var(--px)*100)]" id="pricing">
			<div class="mb-[calc(var(--px)*40)]">
				<div class="label"> 
					PRICING
				</div>
			</div>
			<div>
				<h2 class="heading_h3 font_suisse">
					Start protecting scope without <br>
					changing how you work.
				</h2>
			</div>
		</div>
		<div class="border-b border-gray/20 pb-[calc(var(--px)*63)]">
			<div class="grid grid-cols-3 gap-[calc(var(--px)*50)]">
				<div>
					<div class="mb-[calc(var(--px)*23)]">
						<svg class="w-[calc(var(--px)*32)] h-auto" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 10.5V13.5H21V10.5C21 8.01562 18.9844 6 16.5 6C14.0156 6 12 8.01562 12 10.5ZM10.5 13.5V10.5C10.5 7.21875 13.1719 4.5 16.5 4.5C19.7812 4.5 22.5 7.21875 22.5 10.5V13.5H23.25C25.3125 13.5 27 15.1875 27 17.25V24.75C27 26.8594 25.3125 28.5 23.25 28.5H9.75C7.64062 28.5 6 26.8594 6 24.75V17.25C6 15.1875 7.64062 13.5 9.75 13.5H10.5ZM7.5 17.25V24.75C7.5 26.0156 8.48438 27 9.75 27H23.25C24.4688 27 25.5 26.0156 25.5 24.75V17.25C25.5 16.0312 24.4688 15 23.25 15H9.75C8.48438 15 7.5 16.0312 7.5 17.25Z" fill="#6F59E0"/>
						</svg>
					</div>
					<div>
						<div class="font-medium">
							Immediate protection
						</div>
						<div class="text_base">
							Starts working instantly
						</div>
					</div>
				</div>
				<div>
					<div class="mb-[calc(var(--px)*23)]">
						<svg class="w-[calc(var(--px)*32)] h-auto" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M24.4688 6.14062L18.8438 11.8125L21.1875 14.2031L26.8594 8.53125C27 8.39062 27 8.15625 26.8594 8.01562L24.9844 6.14062C24.8438 6 24.6094 6 24.4688 6.14062ZM6.09375 24.5156C5.95312 24.6562 5.95312 24.8906 6.09375 25.0312L7.96875 26.9062C8.10938 27.0469 8.34375 27.0469 8.48438 26.9062L20.1562 15.2344L17.7656 12.8438L6.09375 24.5156ZM23.3906 5.10938C24.1406 4.35938 25.3125 4.35938 26.0625 5.10938L27.8906 6.9375C28.6406 7.6875 28.6406 8.85938 27.8906 9.60938L9.5625 27.9375C8.8125 28.6875 7.64062 28.6875 6.89062 27.9375L5.0625 26.1094C4.3125 25.3594 4.3125 24.1875 5.0625 23.4375L23.3906 5.10938ZM9 8.25V10.5H11.25C11.625 10.5 12 10.875 12 11.25C12 11.6719 11.625 12 11.25 12H9V14.25C9 14.6719 8.625 15 8.25 15C7.82812 15 7.5 14.6719 7.5 14.25V12H5.25C4.82812 12 4.5 11.6719 4.5 11.25C4.5 10.875 4.82812 10.5 5.25 10.5H7.5V8.25C7.5 7.875 7.82812 7.5 8.25 7.5C8.625 7.5 9 7.875 9 8.25ZM24.75 19.5C25.125 19.5 25.5 19.875 25.5 20.25V22.5H27.75C28.125 22.5 28.5 22.875 28.5 23.25C28.5 23.6719 28.125 24 27.75 24H25.5V26.25C25.5 26.6719 25.125 27 24.75 27C24.3281 27 24 26.6719 24 26.25V24H21.75C21.3281 24 21 23.6719 21 23.25C21 22.875 21.3281 22.5 21.75 22.5H24V20.25C24 19.875 24.3281 19.5 24.75 19.5ZM14.8125 5.25V6.1875H15.75C16.0312 6.1875 16.3125 6.46875 16.3125 6.75C16.3125 7.07812 16.0312 7.35938 15.75 7.35938H14.8125V8.25C14.8125 8.57812 14.5312 8.85938 14.25 8.85938C13.9219 8.85938 13.6406 8.57812 13.6406 8.25V7.35938H12.75C12.4219 7.35938 12.1406 7.07812 12.1406 6.75C12.1406 6.46875 12.4219 6.1875 12.75 6.1875H13.6406V5.25C13.6406 4.96875 13.9219 4.6875 14.25 4.6875C14.5312 4.6875 14.8125 4.96875 14.8125 5.25Z" fill="#6F59E0"/>
						</svg>
					</div>
					<div>
						<div class="font-medium">
							No heavy setup
						</div>
						<div class="text_base">
							Works with your existing workflow.
						</div>
					</div>
				</div>
				<div>
					<div class="mb-[calc(var(--px)*23)]">
						<svg class="w-[calc(var(--px)*32)] h-auto" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 6C12.2031 6 8.78125 8.01562 6.90625 11.25C4.98438 14.5312 4.98438 18.5156 6.90625 21.75C8.78125 25.0312 12.2031 27 16 27C19.75 27 23.1719 25.0312 25.0469 21.75C26.9688 18.5156 26.9688 14.5312 25.0469 11.25C23.1719 8.01562 19.75 6 16 6ZM16 28.5C11.6875 28.5 7.75 26.25 5.59375 22.5C3.4375 18.7969 3.4375 14.25 5.59375 10.5C7.75 6.79688 11.6875 4.5 16 4.5C20.2656 4.5 24.2031 6.79688 26.3594 10.5C28.5156 14.25 28.5156 18.7969 26.3594 22.5C24.2031 26.25 20.2656 28.5 16 28.5ZM12.4375 12.9844C12.7188 12.7031 13.2344 12.7031 13.5156 12.9844L16 15.4688L18.4375 12.9844C18.7188 12.7031 19.2344 12.7031 19.5156 12.9844C19.7969 13.2656 19.7969 13.7812 19.5156 14.0625L17.0312 16.5L19.5156 18.9844C19.7969 19.2656 19.7969 19.7812 19.5156 20.0625C19.2344 20.3438 18.7188 20.3438 18.4375 20.0625L16 17.5781L13.5156 20.0625C13.2344 20.3438 12.7188 20.3438 12.4375 20.0625C12.1562 19.7812 12.1562 19.2656 12.4375 18.9844L14.9219 16.5L12.4375 14.0625C12.1562 13.7812 12.1562 13.2656 12.4375 12.9844Z" fill="#6F59E0"/>
						</svg>
					</div>
					<div>
						<div class="font-medium">
							Cancel anytime
						</div>
						<div class="text_base">
							No lock-in commitment.
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-[calc(var(--px)*73)]">
			<div class="grid grid-cols-2 gap-[calc(var(--px)*96)]">
				<div class="flex flex-col justify-between">
					<div>
						<div class="bg-[#F8F5F5] rounded-[calc(var(--px)*8)] px-[calc(var(--px)*60)] py-[calc(var(--px)*40)]">
							<div class="flex items-center gap-[calc(var(--px)*60)]">
								<div class="font_suisse font-bold text-[calc(var(--px)*24)]">
									Free
								</div>
								<div class="font-semibold text_base">
									Explorer
								</div>
							</div>
							<div class="text_base min-h-[calc(var(--px)*84)] mt-[calc(var(--px)*35)] flex flex-col justify-end">
								Use Boundr on one active project and discover where requests start slipping outside scope.
							</div>
						</div>
						<div class="mt-[calc(var(--px)*65)] pl-[calc(var(--px)*114)] flex flex-col justify-between">
							<div class="mb-[calc(var(--px)*68)]">
								<ul class="plan_list_compar text_base">
									<li>
										<strong>1 project assessment</strong>
									</li>
									<li>
										<strong>Around 50 requests</strong>
									</li>
									<li>
										Full scope baseline parsing
										<!-- <span class="wrap_tooltip">
											<span class="text_tooltip">parsing</span>
											<span class="tooltip_wrapper">
												1 Scope strenghened <br>
												25-50 requests ect
											</span>
										</span> -->
									</li>
									<li>
										Scope drift pattern detection
									</li>
									<li>
										Revision logic
									</li>
									<li>
										Internal decisions explanations
									</li>
									<li>
										Time estimates
									</li>
									<li>
										Client-ready explanations 
									</li>
									<li>
										Email loop (forwarding / CC)
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="pl-[calc(var(--px)*78)]">
						<a href="https://app.boundr.io/waitlist" target="_blank" class="btn_site min-w-[calc(var(--px)*247)]" data-button-rotate-hover data-button-rotate>
							<div class="button_bg"></div>
							<div class="button_label__wrap">
								<div class="button_label">
									<span>Join the waitlist</span>
								</div>

								<div class="button_label" aria-hidden="true">
									<span>Join the waitlist</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div>
					<div>
						<div class="bg-[#F8F5F5] rounded-[calc(var(--px)*8)] px-[calc(var(--px)*60)] py-[calc(var(--px)*40)]">
							<div class="flex items-center gap-[calc(var(--px)*60)]">
								<div class="font_suisse font-bold text-[calc(var(--px)*24)]">
									Starter
								</div>
								<div class="font-semibold text_base">
									Scope Guard
								</div>
							</div>
							<div class="text_base min-h-[calc(var(--px)*84)] mt-[calc(var(--px)*35)] flex flex-col justify-end">
								Protect margins across active client work <br>
								Boundr keeps scope clear as requests come in — so small <br>
								changes don’t quietly turn into unpaid work.
							</div>
						</div>
						<div class="mt-[calc(var(--px)*65)] pl-[calc(var(--px)*114)]">
							<div class="mb-[calc(var(--px)*68)]">
								<ul class="plan_list_compar text_base">
									<li>
										Up to <strong>3 active projects</strong>
									</li>
									<li>
										<strong>Up to 100 AI request analyses / month</strong>
									</li>
									<li>
										Full scope baseline parsing
									</li>
									<li>
										Scope drift pattern detection
									</li>
									<li>
										Revision logic 
									</li>
									<li>
										Time estimates
									</li>
									<li>
										Client-ready explanations 
									</li>
									<li>
										Email loop (forwarding / CC)
									</li>
									<li>
										Hard monthly token budget guardrail
									</li>
									<li>
										Scope summary
									</li>
									<li>
										Deliverables state overview
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="pl-[calc(var(--px)*78)]">
						<div class="font_suisse text_base mb-[calc(var(--px)*36)]">
							Prevent one unpaid revision, <br>
							and it pays for itself.
						</div>
						<div>
							<a href="https://app.boundr.io/waitlist" target="_blank" class="btn_site min-w-[calc(var(--px)*247)]" data-button-rotate-hover data-button-rotate>
								<div class="button_bg"></div>
								<div class="button_label__wrap">
									<div class="button_label">
										<span>Join the waitlist</span>
									</div>

									<div class="button_label" aria-hidden="true">
										<span>Join the waitlist</span>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="bg-dark pb-[110px] pt-[calc(var(--px)*80)] text-white">
	<div class="container">
		<div class="flex" id="faq">
			<div class="w-[calc(100%-(var(--px)*592))] pr-[calc(var(--px)*100)]">
				<div class="sticky top_sticky_section">
					<h2 class="heading_h1 font_suisse">FAQ</h2>
				</div>
			</div>
			<div class="w-[calc(var(--px)*592)] text_base accordion_section">
				<div class="item_accordion js_accordion__group" data-underline-link>
					<div class="toggle_accordion js_accordion__menu">
						<div class="inside_toggl_acr">
							Will this add work to my process?
							<div class="arrow_accord js_accordion__icon"></div>
						</div>
					</div>
					<div class="accordion_description js_accordion__content">
						<div class="inside_acc_descr">
							Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Repudiandae nam doloribus quibusdam commodi doloremque maiores alias illum quisquam praesentium aliquam ipsam, est nemo, corporis quia eveniet fugiat.
						</div>
					</div>
				</div>
				<div class="item_accordion js_accordion__group" data-underline-link>
					<div class="toggle_accordion js_accordion__menu">
						<div class="inside_toggl_acr">
							Do my clients need to use this too?
							<div class="arrow_accord js_accordion__icon"></div>
						</div>
					</div>
					<div class="accordion_description js_accordion__content">
						<div class="inside_acc_descr">
							Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Repudiandae nam doloribus quibusdam commodi doloremque maiores alias illum quisquam praesentium aliquam ipsam, est nemo, corporis quia eveniet fugiat nesciunt rem.
						</div>
					</div>
				</div>
				<div class="item_accordion js_accordion__group" data-underline-link>
					<div class="toggle_accordion js_accordion__menu">
						<div class="inside_toggl_acr">
							How does Boundr track requests?
							<div class="arrow_accord js_accordion__icon"></div>
						</div>
					</div>
					<div class="accordion_description js_accordion__content">
						<div class="inside_acc_descr">
							Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Repudiandae nam doloribus quibusdam commodi doloremque maiores alias illum quisquam praesentium aliquam ipsam, est nemo, corporis quia eveniet fugiat.
						</div>
					</div>
				</div>
				<div class="item_accordion js_accordion__group" data-underline-link>
					<div class="toggle_accordion js_accordion__menu">
						<div class="inside_toggl_acr">
							Who is Boundr for?
							<div class="arrow_accord js_accordion__icon"></div>
						</div>
					</div>
					<div class="accordion_description js_accordion__content">
						<div class="inside_acc_descr">
							Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Repudiandae nam doloribus quibusdam commodi doloremque maiores alias illum quisquam praesentium aliquam ipsam, est nemo, corporis quia eveniet fugiat nesciunt rem.
						</div>
					</div>
				</div>
				<div class="item_accordion js_accordion__group" data-underline-link>
					<div class="toggle_accordion js_accordion__menu">
						<div class="inside_toggl_acr">
							Is Boundr a project management tool?
							<div class="arrow_accord js_accordion__icon"></div>
						</div>
					</div>
					<div class="accordion_description js_accordion__content">
						<div class="inside_acc_descr">
							Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Repudiandae nam doloribus quibusdam commodi doloremque maiores alias illum quisquam praesentium aliquam ipsam, est nemo, corporis quia eveniet fugiat.
						</div>
					</div>
				</div>
				<div class="item_accordion js_accordion__group" data-underline-link>
					<div class="toggle_accordion js_accordion__menu">
						<div class="inside_toggl_acr">
							How does Boundr track requests?
							<div class="arrow_accord js_accordion__icon"></div>
						</div>
					</div>
					<div class="accordion_description js_accordion__content">
						<div class="inside_acc_descr">
							Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Repudiandae nam doloribus quibusdam commodi doloremque maiores alias illum quisquam praesentium aliquam ipsam, est nemo, corporis quia eveniet fugiat nesciunt rem.
						</div>
					</div>
				</div>
				<div class="item_accordion js_accordion__group" data-underline-link>
					<div class="toggle_accordion js_accordion__menu">
						<div class="inside_toggl_acr">
							What If my client doesn’t CC boundr during projects?
							<div class="arrow_accord js_accordion__icon"></div>
						</div>
					</div>
					<div class="accordion_description js_accordion__content">
						<div class="inside_acc_descr">
							Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Repudiandae nam doloribus quibusdam commodi doloremque maiores alias illum quisquam praesentium aliquam ipsam, est nemo, corporis quia eveniet fugiat.
						</div>
					</div>
				</div>
				<div class="item_accordion js_accordion__group" data-underline-link>
					<div class="toggle_accordion js_accordion__menu">
						<div class="inside_toggl_acr">
							Which communication platforms Boundr works on?
							<div class="arrow_accord js_accordion__icon"></div>
						</div>
					</div>
					<div class="accordion_description js_accordion__content">
						<div class="inside_acc_descr">
							Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Repudiandae nam doloribus quibusdam commodi doloremque maiores alias illum quisquam praesentium aliquam ipsam, est nemo, corporis quia eveniet fugiat nesciunt rem.
						</div>
					</div>
				</div>
				<div class="item_accordion js_accordion__group" data-underline-link>
					<div class="toggle_accordion js_accordion__menu">
						<div class="inside_toggl_acr">
							How can Boundr help me protect my margins?
							<div class="arrow_accord js_accordion__icon"></div>
						</div>
					</div>
					<div class="accordion_description js_accordion__content">
						<div class="inside_acc_descr">
							Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Repudiandae nam doloribus quibusdam commodi doloremque maiores alias illum quisquam praesentium aliquam ipsam, est nemo, corporis quia eveniet fugiat.
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-[calc(var(--px)*134)] text-center">
			<h4 class="font_suisse heading_h3">
				Start protecting scope without <br>
				changing how you work.
			</h4>
			<div class="mt-[calc(var(--px)*48)]">
				<a href="https://app.boundr.io/waitlist" target="_blank" class="btn_site min-w-[calc(var(--px)*247)]" data-button-rotate-hover data-button-rotate>
					<div class="button_bg"></div>
					<div class="button_label__wrap">
						<div class="button_label">
							<span>Join the waitlist</span>
						</div>

						<div class="button_label" aria-hidden="true">
							<span>Join the waitlist</span>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>