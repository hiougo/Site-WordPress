<div
	<?php echo $wrapper_attr; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="betterdocs-article-reactions-sidebar">
		<h5><?php echo esc_html( $reactions_text ); ?></h5>
		<ul class="betterdocs-article-reaction-links layout-3">
			<?php if ( isset( $happy ) && $happy == true ) { ?>
			<li>
				<a class="betterdocs-emoji" data-feelings="happy" href="#">
					<?php
					if ( isset( $happy_icon ) && $happy_icon ) {
						echo '<img src="' . esc_url( $happy_icon ) . '" alt="" />';
					} else {
						?>
					<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.5372 24.5744C6.76569 24.5744 0.539062 20.8182 0.539062 12.5762C0.539062 4.33424 6.76569 0.578125 12.5372 0.578125C15.7436 0.578125 18.7018 1.67277 20.8945 3.66887C23.2735 5.85816 24.5353 8.94891 24.5353 12.5762C24.5353 16.2036 23.2735 19.2729 20.8945 21.4622C18.7018 23.4583 15.7229 24.5744 12.5372 24.5744Z" fill="url(#paint0_radial_6182_23530)"/>
						<path d="M22.4493 5.44727C23.5519 7.29313 24.127 9.491 24.127 11.9357C24.127 15.563 22.8651 18.6323 20.4862 20.8216C18.2934 22.8177 15.3146 23.9338 12.1288 23.9338C8.39287 23.9338 4.46658 22.3562 2.16211 19.0101C4.38797 22.8005 8.57284 24.5777 12.5426 24.5777C15.7283 24.5777 18.7071 23.4616 20.8999 21.4655C23.2788 19.2762 24.5407 16.2069 24.5407 12.5796C24.5407 9.84515 23.8229 7.41547 22.4493 5.44727Z" fill="#EB8F00"/>
						<path opacity="0.8" d="M5.01466 18.2486C7.014 18.2486 8.63479 16.5669 8.63479 14.4924C8.63479 12.418 7.014 10.7363 5.01466 10.7363C3.01532 10.7363 1.39453 12.418 1.39453 14.4924C1.39453 16.5669 3.01532 18.2486 5.01466 18.2486Z" fill="url(#paint1_radial_6182_23530)"/>
						<path opacity="0.8" d="M20.2193 18.2486C22.2186 18.2486 23.8394 16.5669 23.8394 14.4924C23.8394 12.418 22.2186 10.7363 20.2193 10.7363C18.2199 10.7363 16.5991 12.418 16.5991 14.4924C16.5991 16.5669 18.2199 18.2486 20.2193 18.2486Z" fill="url(#paint2_radial_6182_23530)"/>
						<path d="M9.50582 11.2864C9.50582 11.2864 9.49548 11.2713 9.47272 11.2434C9.45204 11.2155 9.42307 11.1769 9.38584 11.1275C9.35481 11.0932 9.31757 11.0524 9.27413 11.0052C9.23069 10.9537 9.17691 10.9 9.12312 10.8442C9.06727 10.7906 9.00935 10.7348 8.94935 10.6897C8.89143 10.6403 8.8273 10.6038 8.77559 10.5738C8.7218 10.5394 8.67216 10.5309 8.64113 10.5201C8.62458 10.5137 8.6101 10.5137 8.59768 10.5115C8.59148 10.5137 8.58527 10.5094 8.57907 10.5115L8.57079 10.5137H8.56665H8.56459C8.58941 10.5137 8.50873 10.5158 8.62044 10.5115L8.50666 10.5158C8.4777 10.5158 8.49632 10.518 8.49839 10.518C8.5046 10.518 8.50873 10.518 8.51287 10.5158C8.52942 10.5094 8.51287 10.5158 8.50873 10.5158C8.50253 10.5158 8.49425 10.518 8.48598 10.5223C8.45288 10.533 8.40323 10.5416 8.35152 10.5759C8.2998 10.606 8.23567 10.6425 8.17775 10.6918C8.11983 10.7391 8.05984 10.7927 8.00398 10.8464C7.89641 10.9558 7.80126 11.0653 7.73506 11.1447C7.66679 11.2263 7.62956 11.2735 7.62956 11.2735L7.58198 11.3314C7.29858 11.6749 6.77728 11.7328 6.4194 11.4624C6.1753 11.2778 6.0698 10.9902 6.11531 10.7154C6.11531 10.7154 6.12979 10.6274 6.17116 10.4751C6.2146 10.3227 6.28701 10.1059 6.42974 9.85046C6.57248 9.59719 6.77935 9.29885 7.12895 9.02626C7.30064 8.89319 7.50958 8.76012 7.75781 8.66997C7.8178 8.64636 7.88193 8.6249 7.94813 8.60772C8.0164 8.59055 8.07018 8.57124 8.16327 8.55836L8.29153 8.53904C8.33083 8.53475 8.38875 8.52831 8.39703 8.52831L8.5108 8.51972L8.57493 8.51758H8.58114H8.59355L8.62044 8.51972H8.67009L8.77559 8.52616C8.84592 8.5326 8.91419 8.54548 8.98245 8.55621C9.11691 8.58197 9.25138 8.61846 9.37343 8.66568C9.62166 8.75582 9.8306 8.88675 10.0023 9.02197C10.3519 9.29456 10.5588 9.5929 10.7015 9.84617C10.7739 9.97281 10.8277 10.093 10.867 10.1982C10.9104 10.2991 10.9415 10.4064 10.9663 10.4858C10.989 10.5631 10.989 10.6038 10.9994 10.6403C11.0056 10.6747 11.0077 10.694 11.0077 10.694C11.0842 11.1275 10.776 11.5375 10.3229 11.6083C9.99816 11.662 9.68579 11.5268 9.50582 11.2864Z" fill="#422B0D"/>
						<path d="M17.6817 11.2864C17.6817 11.2864 17.6714 11.2713 17.6486 11.2434C17.6279 11.2155 17.599 11.1769 17.5617 11.1275C17.5307 11.0932 17.4935 11.0524 17.45 11.0052C17.4066 10.9537 17.3528 10.9 17.299 10.8442C17.2432 10.7906 17.1852 10.7348 17.1253 10.6897C17.0673 10.6403 17.0032 10.6038 16.9515 10.5738C16.8977 10.5394 16.8481 10.5309 16.817 10.5201C16.8005 10.5137 16.786 10.5137 16.7736 10.5115C16.7674 10.5137 16.7612 10.5094 16.755 10.5115L16.7467 10.5137H16.7426H16.7405H16.7384C16.7632 10.5137 16.6826 10.5158 16.7943 10.5115L16.6805 10.5158C16.6515 10.5158 16.6702 10.518 16.6722 10.518C16.6784 10.518 16.6826 10.518 16.6867 10.5158C16.7032 10.5094 16.6867 10.5158 16.6826 10.5158C16.6764 10.5158 16.6681 10.518 16.6598 10.5223C16.6267 10.533 16.5771 10.5416 16.5253 10.5759C16.4736 10.606 16.4095 10.6425 16.3516 10.6918C16.2937 10.7391 16.2337 10.7927 16.1778 10.8464C16.0702 10.9558 15.9751 11.0653 15.9089 11.1447C15.8406 11.2263 15.8034 11.2735 15.8034 11.2735L15.7558 11.3314C15.4724 11.6749 14.9511 11.7328 14.5932 11.4624C14.3491 11.2778 14.2436 10.9902 14.2891 10.7154C14.2891 10.7154 14.3036 10.6274 14.345 10.4751C14.3884 10.3227 14.4608 10.1059 14.6036 9.85046C14.7463 9.59719 14.9532 9.29885 15.3028 9.02626C15.4745 8.89319 15.6834 8.76012 15.9316 8.66997C15.9916 8.64636 16.0558 8.6249 16.122 8.60772C16.1902 8.59055 16.244 8.57124 16.3371 8.55836L16.4654 8.53904C16.5047 8.53475 16.5626 8.52831 16.5709 8.52831L16.6846 8.51972L16.7488 8.51758H16.755H16.7674L16.7943 8.51972H16.8439L16.9494 8.52616C17.0198 8.5326 17.088 8.54548 17.1563 8.55621C17.2907 8.58197 17.4252 8.61846 17.5473 8.66568C17.7955 8.75582 18.0044 8.88675 18.1761 9.02197C18.5257 9.29456 18.7326 9.5929 18.8753 9.84617C18.9477 9.97281 19.0015 10.093 19.0408 10.1982C19.0843 10.2991 19.1153 10.4064 19.1401 10.4858C19.1629 10.5631 19.1629 10.6038 19.1732 10.6403C19.1794 10.6747 19.1815 10.694 19.1815 10.694C19.258 11.1275 18.9498 11.5375 18.4968 11.6083C18.172 11.662 17.8596 11.5268 17.6817 11.2864Z" fill="#422B0D"/>
						<path d="M12.6247 19.2496C10.0244 19.2496 7.96818 17.9725 6.83456 16.6053C6.72078 16.4679 6.69389 16.2833 6.76629 16.1223C6.8387 15.9571 6.99591 15.8497 7.16554 15.8497C7.24208 15.8497 7.32069 15.8712 7.38895 15.912C8.55774 16.6117 10.5209 17.4767 12.6185 17.4767H12.6516C14.7513 17.4767 16.7123 16.6096 17.8811 15.912C17.9515 15.8712 18.028 15.8476 18.1045 15.8497C18.2742 15.8497 18.4314 15.9571 18.5038 16.1223C18.5741 16.2833 18.5493 16.47 18.4355 16.6053C17.3019 17.9703 15.2436 19.2496 12.6454 19.2496" fill="#422B0D"/>
						<defs>
						<radialGradient id="paint0_radial_6182_23530" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12.5372 12.5762) scale(11.7829 12.2256)">
						<stop offset="0.5" stop-color="#FDE030"/>
						<stop offset="0.9188" stop-color="#F7C02B"/>
						<stop offset="1" stop-color="#F4A223"/>
						</radialGradient>
						<radialGradient id="paint1_radial_6182_23530" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(5.01478 14.4922) scale(3.93829 3.88173)">
						<stop stop-color="#ED7770"/>
						<stop offset="0.9" stop-color="#ED7770" stop-opacity="0"/>
						</radialGradient>
						<radialGradient id="paint2_radial_6182_23530" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(20.2197 14.4922) scale(3.93829 3.88173)">
						<stop stop-color="#ED7770"/>
						<stop offset="0.9" stop-color="#ED7770" stop-opacity="0"/>
						</radialGradient>
						</defs>
					</svg>
					<?php } ?>
					<span class="betterdocs-tooltip"><?php echo esc_html__( 'Happy', 'betterdocs' ); ?></span>
				</a>
			</li>
			<?php } ?>
			<?php if ( isset( $normal ) && $normal == true ) { ?>
			<li>
				<a class="betterdocs-emoji" data-feelings="normal" href="#">
					<?php
					if ( isset( $normal_icon ) && $normal_icon ) {
						echo '<img src="' . esc_url( $normal_icon ) . '" alt="" />';
					} else {
						?>
					<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.2414 24.1419C6.46985 24.1419 0.243164 20.3856 0.243164 12.1432C0.243164 3.90083 6.46985 0.144531 12.2414 0.144531C15.4479 0.144531 18.4061 1.23922 20.5988 3.23543C22.9778 5.42481 24.2397 8.51571 24.2397 12.1432C24.2397 15.7707 22.9778 18.8402 20.5988 21.0296C18.4061 23.0258 15.4272 24.1419 12.2414 24.1419Z" fill="url(#paint0_radial_6182_23539)"/>
						<path d="M22.1512 5.01367C23.2538 6.85962 23.8289 9.0576 23.8289 11.5024C23.8289 15.1299 22.567 18.1994 20.188 20.3887C17.9952 22.3849 15.0164 23.5011 11.8306 23.5011C8.09459 23.5011 4.17654 21.9235 1.86377 18.5771C4.08966 22.3678 8.27664 24.145 12.2443 24.145C15.4301 24.145 18.409 23.0289 20.6018 21.0327C22.9807 18.8433 24.2426 15.7739 24.2426 12.1463C24.2426 9.41176 23.5248 6.98197 22.1512 5.01367Z" fill="#EB8F00"/>
						<path d="M17.4955 17.5336H7.15217C6.695 17.5336 6.32471 17.1494 6.32471 16.675C6.32471 16.2006 6.695 15.8164 7.15217 15.8164H17.4955C17.9527 15.8164 18.323 16.2006 18.323 16.675C18.323 17.1494 17.9527 17.5336 17.4955 17.5336Z" fill="#422B0D"/>
						<path d="M8.32388 8.50586C7.45711 8.50586 6.66895 9.26571 6.66895 10.5278C6.66895 11.7899 7.45711 12.5476 8.32388 12.5476C9.19065 12.5476 9.97881 11.7878 9.97881 10.5278C9.97881 9.26785 9.19065 8.50586 8.32388 8.50586Z" fill="#422B0D"/>
						<path d="M8.24535 9.35117C7.9516 9.20521 7.59785 9.334 7.45512 9.63879C7.34548 9.87705 7.39512 10.1625 7.57924 10.3471C7.87299 10.4931 8.22673 10.3643 8.36947 10.0595C8.47911 9.82124 8.42946 9.53576 8.24535 9.35117Z" fill="#896024"/>
						<path d="M16.257 8.50586C15.3902 8.50586 14.6021 9.26571 14.6021 10.5278C14.6021 11.7899 15.3902 12.5476 16.257 12.5476C17.1238 12.5476 17.9119 11.7878 17.9119 10.5278C17.9119 9.26785 17.1279 8.50586 16.257 8.50586Z" fill="#422B0D"/>
						<path d="M16.178 9.35117C15.8842 9.20521 15.5305 9.334 15.3877 9.63879C15.2781 9.87705 15.3277 10.1625 15.5119 10.3471C15.8056 10.4931 16.1593 10.3643 16.3021 10.0595C16.4117 9.82124 16.3621 9.53576 16.178 9.35117Z" fill="#896024"/>
						<defs>
						<radialGradient id="paint0_radial_6182_23539" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12.2414 12.1432) scale(11.7831 12.2262)">
						<stop offset="0.5" stop-color="#FDE030"/>
						<stop offset="0.92" stop-color="#F7C02B"/>
						<stop offset="1" stop-color="#F4A223"/>
						</radialGradient>
						</defs>
					</svg>
					<?php } ?>
					<span class="betterdocs-tooltip"><?php echo esc_html__( 'Normal', 'betterdocs' ); ?></span>
				</a>
			</li>
			<?php } ?>
			<?php if ( isset( $sad ) && $sad == true ) { ?>
			<li>
				<a class="betterdocs-emoji" data-feelings="sad" href="#">
					<?php
					if ( isset( $sad_icon ) && $sad_icon ) {
						echo '<img src="' . esc_url( $sad_icon ) . '" alt="" />';
					} else {
						?>
					<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.7258 23.9993C6.95422 23.9993 0.727539 20.243 0.727539 12.0006C0.727539 3.75825 6.95422 0.00195312 12.7258 0.00195312C15.9322 0.00195312 18.8904 1.09665 21.0832 3.09285C23.4622 5.28224 24.7241 8.37313 24.7241 12.0006C24.7241 15.6282 23.4622 18.6976 21.0832 20.887C18.8904 22.8832 15.9115 23.9993 12.7258 23.9993Z" fill="url(#paint0_radial_6182_23547)"/>
						<path d="M22.6336 4.87109C23.7362 6.71705 24.3113 8.91502 24.3113 11.3598C24.3113 14.9873 23.0494 18.0568 20.6704 20.2462C18.4776 22.2424 15.4988 23.3585 12.313 23.3585C8.57701 23.3585 4.65896 21.7809 2.34619 18.4346C4.57208 22.2252 8.75905 24.0025 12.7268 24.0025C15.9125 24.0025 18.8914 22.8863 21.0842 20.8901C23.4631 18.7007 24.725 15.6313 24.725 12.0038C24.725 9.26918 24.0072 6.83939 22.6336 4.87109Z" fill="#EB8F00"/>
						<path d="M12.8126 17.2148C15.0467 17.2148 16.4948 18.9105 16.8879 19.7047C17.0327 20.0052 17.0327 20.2628 16.9085 20.3701C16.7762 20.456 16.6065 20.456 16.4741 20.3701C16.4079 20.3422 16.3459 20.3057 16.2879 20.2628C15.2743 19.5073 14.06 19.0951 12.8126 19.0823C11.5693 19.0994 10.3571 19.503 9.33723 20.2413C9.27931 20.2843 9.21725 20.3208 9.15105 20.3487C9.01866 20.4345 8.84902 20.4345 8.71663 20.3487C8.59251 20.2199 8.59251 19.9838 8.73732 19.6833C9.13036 18.9105 10.5784 17.2148 12.8126 17.2148Z" fill="#422B0D"/>
						<path d="M14.9655 13.0276C14.6842 13.298 14.6676 13.7531 14.9283 14.0429C14.9697 14.0901 15.0172 14.1309 15.069 14.1652C15.673 14.631 16.3515 14.9809 17.0756 15.1955C17.8058 15.3844 18.5609 15.4424 19.3097 15.3672C19.6986 15.3565 20.0069 15.0195 19.9965 14.616C19.9945 14.558 19.9862 14.5001 19.9717 14.4443C19.8496 14.0729 19.5 13.8347 19.1235 13.8647C18.5691 13.9205 18.0106 13.8862 17.4686 13.7574C16.9349 13.5878 16.4301 13.326 15.9792 12.9847C15.673 12.7507 15.251 12.7679 14.9655 13.0276Z" fill="#422B0D"/>
						<path d="M10.6611 13.0276C10.9425 13.298 10.959 13.7531 10.6984 14.0429C10.657 14.0901 10.6094 14.1309 10.5577 14.1652C9.95366 14.631 9.27513 14.9809 8.5511 15.1955C7.82086 15.3844 7.0658 15.4424 6.31694 15.3672C5.93838 15.3608 5.63842 15.0367 5.64463 14.6439C5.64669 14.5752 5.65704 14.5087 5.67566 14.4443C5.79771 14.0729 6.14731 13.8347 6.52381 13.8647C7.07821 13.9205 7.63675 13.8862 8.17874 13.7574C8.71246 13.5878 9.21721 13.326 9.66818 12.9847C9.96607 12.7507 10.3839 12.7679 10.6611 13.0276Z" fill="#422B0D"/>
						<defs>
						<radialGradient id="paint0_radial_6182_23547" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12.7258 12.0006) scale(11.7831 12.2262)">
						<stop offset="0.5" stop-color="#FDE030"/>
						<stop offset="0.92" stop-color="#F7C02B"/>
						<stop offset="1" stop-color="#F4A223"/>
						</radialGradient>
						</defs>
					</svg>
					<?php } ?>
					<span class="betterdocs-tooltip"><?php echo esc_html__( 'Sad', 'betterdocs' ); ?></span>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>
