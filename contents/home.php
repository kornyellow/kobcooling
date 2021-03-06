<?php

namespace contents;

use libraries\cooling\CoolingHeader;
use libraries\cooling\CoolingComponent;

CoolingHeader::constructHeader();
?>

<section class="main-cover">
	<h1><img class="icon icon-light icon-margin" src="/static/svgs/city.svg" alt="ไอคอนคูลลิ่งทาวเวอร์">คูลลิ่งทาวเวอร์</h1>
	<p>ผลิตและจำหน่ายคูลลิ่งทาวเวอร์กลมและคูลลิ่งทาวเวอร์เหลี่ยม ซ่อมแซมคูลลิ่งทาวเวอร์ เปลี่ยนอะไหล่ของคูลลิ่งทาวเวอร์ทุกชนิด ทุกยี่ห้อ บริการงานล้างคูลลิ่ง ทั้งงานระบบ งานปั๊มน้ำ และงานท่อ โดยทีมงานมืออาชีพที่ชำนาญงาน เพื่อให้บริการตามความต้องการของลูกค้าและเจ้าของโครงการ หรือผู้รับเหมาก่อสร้าง เพื่อตอบสนองความต้องการในงานระบบงานทำคูลลิ่งทาวเวอร์ และงานระบบ และจำหน่ายเคมีน้ำยาในระบบคูลลิ่ง ซิลเลอร์ บอยเลอร์</p>
</section>

<section class="section">
	<h2>ประเภทของคูลลิ่งทาวเวอร์</h2>
	<div class="cooling-type">
		<article id="circle">
			<img class="img" src="/static/images/type/circle.jpg" alt="คูลลิ่งทาวเวอร์แบบทรงกลม" title="คูลลิ่งทาวเวอร์แบบทรงกลม">
			<div>
				<h3>คูลลิ่งทาวเวอร์แบบทรงกลม</h3>
				<p>คูลลิ่งทาวเวอร์ แบบ Counter Flow (ทรงกลม)</p>
			</div>
		</article>
		<article id="square">
			<img class="img" src="/static/images/type/square.jpg" alt="คูลลิ่งทาวเวอร์แบบทรงเหลี่ยม" title="คูลลิ่งทาวเวอร์แบบทรงเหลี่ยม">
			<div>
				<h3>คูลลิ่งทาวเวอร์แบบทรงเหลี่ยม</h3>
				<p>คูลลิ่งทาวเวอร์ แบบ Cross Flow (ทรงเหลี่ยม)</p>
			</div>
		</article>
	</div>
</section>

<?php
CoolingComponent::services();
CoolingComponent::contact();
?>
