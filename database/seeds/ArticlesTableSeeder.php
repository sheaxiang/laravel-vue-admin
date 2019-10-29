<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 3,
                'column_id' => 2,
                'title' => '生存哲学1',
                'subtitle' => 'SURVIVAL PHILOSOPHY',
                'view_number' => 769,
                'release_date' => '2019-03-20 17:01:28',
                'link' => NULL,
            'content' => '<h3>赤诚初<span style="color: rgb(194, 79, 74);">心</span></h3><h5>用创造，讲述一段独特故事。</h5><p>艺术是人类对世界的感知。每一个文化空间都该有它自己的灵魂和文化，独特的情趣和品位。用生命致敬时间，用赤诚体验世界，将创意、专业和执行融为一体，为空间赋予生命力。</p><p><br></p><h3>地阔天<span style="color: rgb(194, 79, 74);">宽</span></h3><h5>用比天空更广阔的视野，看世界。   </h5><p>人类的历史，在宇宙时空中不过是瞬间。时代瞬息万变，文化创意、科技金融、时尚设计、演艺娱乐模糊着行业的边界，只有宽广的视野能让人创造具有独特精神和文化内涵的永恒瞬间。</p><p><br></p><h3>从容自<span style="color: rgb(194, 79, 74);">若</span></h3><h5>专业和自信，意味着从容与时代同行。</h5><p>文化空间和新闻发布都在向观众传递信息，而传递信息是一门复杂的综合性艺术，它随着接受者不断变换需求，只有足够的专业，才能从容将信息、风格和理念准确传达。</p><p><br></p><h3>百川归<span style="color: rgb(194, 79, 74);">谷</span></h3><h5>山谷之美，在于它聚集万物的力量。</h5><p>对相关资源的汇聚是企业的原生意义之一，空间建设、品牌打造、会展会议、新闻传播，在服务的同时搭建政府与企业、部门与部门之间畅通的沟通交流平台，推动企业品牌的繁荣成长才能实现更好的成长。</p><p><br></p>',
                'created_at' => '2019-03-20 17:01:28',
                'updated_at' => '2019-07-11 04:51:39',
                'is_index' => 0,
                'introduction' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'column_id' => 2,
                'title' => '业务范围',
                'subtitle' => 'BUSINESS SCOPE',
                'view_number' => 767,
                'release_date' => '2019-03-20 17:02:34',
                'link' => NULL,
                'content' => '<p><span style="font-weight: bold; font-size: medium;">坚持</span>对品质的执着体现了我们对客户的尊重及对工作的热忱，对每一个细小环节的一丝不苟，是我们生存和发展的基础，也是每一个活动策划方案精准执行的标准。</p><p><br></p><p><span style="font-weight: bold; font-size: medium;">希望</span>本着学习、研究的态度丰富您的选项，激活您与我的思想，奠定<span style="font-weight: bold;">贵</span>州文化整合营销企业中的专业地位，构建“企业顾问——行业专家——产业创造者的发展路径”，最终共同实现你我产业利润的理性有序增长。</p><p><br></p><p><span style="font-weight: bold; font-size: medium;">追求</span>立足对媒体运营的熟悉度，对活动执行的专业度，整合高端政治资源、国际国内媒体资源、高端文化资源，对企业、政府的项目策划、项目活动进行文化整合营销，充分激发行业消费领袖意见的潜力。</p><p><br></p><p><span style="font-weight: bold; font-size: medium;">相信</span>预算多少不作为我们与客户合作的考量范围，但专业的沟通方式和合作流程是保证每一个活动顺利执行的基石，也是我们双赢的基础。</p>',
                'created_at' => '2019-03-20 17:02:34',
                'updated_at' => '2019-07-11 04:51:39',
                'is_index' => 0,
                'introduction' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'column_id' => 7,
                'title' => '招聘',
                'subtitle' => NULL,
                'view_number' => 0,
                'release_date' => '2019-03-21 10:08:55',
                'link' => NULL,
                'content' => '<div><h4>资深空间设计师</h4><p>1.美术或设计相关专业毕业，图书馆、博物馆或展览馆等文化空间设计等相关工作经验；</p><p>2.能够独立完成图纸制作，熟练掌握 3Dmax/sketchup/CAD等设计制图软件；</p><p>3.具备较强的方案解析能力，有较强的作品表现力，美术功底扎实；</p><p>4.办事严谨认真，踏实敬业，尽职尽责，具有实干精神，重实效性，有良好的职业素养，亲和力、沟通能力、观察分析能力和团队合作精神。</p><p><br></p></div><div><h4>平面设计师</h4><p>1.学历大专以上，美术、平面设计等相关专业；</p><p>2.熟悉品牌设计业平面设计的工作流程，思维活跃，具创造力和视觉表现力；</p><p>3.熟练掌握illustrator/Photoshop/inDesign/CoreIDraw等设计软件，能独立完成版面设计制作工作。</p><p><br></p></div><div><h4>文案策划</h4><p>1.专科以上学历，有相关策划、编辑、文案、或新媒体工作经验优先；</p><p>2.熟悉新媒体行业，1年以上文案工作经验；</p><p>3.能够准确的捕捉产品或事件的亮点，具备恰如其分的文字展现能力；</p><p>4.熟悉各大主流社交平台宣传运营策略。</p><p>5.具有一定的文字功底和表现能力、表达能力、沟通协调能力。</p><p><br></p><p><br></p></div>',
                'created_at' => '2019-03-21 10:08:55',
                'updated_at' => '2019-03-21 10:13:55',
                'is_index' => 0,
                'introduction' => NULL,
            ),
            3 => 
            array (
                'id' => 15,
                'column_id' => 8,
                'title' => '东方科幻谷2015国际数博会科技展示馆',
                'subtitle' => NULL,
                'view_number' => 29,
                'release_date' => '2019-04-26 14:39:50',
                'link' => NULL,
                'content' => '<p align="center">东方科幻谷展示中心，用科技的“智慧”打造一个互动感受、体验未来的梦幻空间，展示东方科幻谷项目的底蕴与未来，让全球知名科幻企业的目光在这里聚焦，同时，在全国乃至全世界，展示东方科幻谷在拓展VR动漫内容的科幻体验主题公园发展空间，实现独特的VR动漫内容旅游布局，打造可复制可推广的中国VR内容的迪斯尼版本上作出的积极探索和创新。</p><p align="center"><br></p><p align="center"><img style="max-width:100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148118_66QNx9FkU8.jpg"></p><p align="center"><img style="max-width: 100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148124_YlafWFDGLG.jpg"><br></p><p align="center"><br></p>',
                'created_at' => '2019-04-26 14:39:50',
                'updated_at' => '2019-07-05 12:34:25',
                'is_index' => 0,
                'introduction' => '东方科幻谷展示中心，用科技的“智慧”打造一个互动感受、体验未来的梦幻空间，展示东方科幻谷项目的底蕴与未来，让全球知名科幻企业的目光在这里聚焦，同时，在全国乃至全世界，展示东方科幻谷在拓展VR动漫内容的科幻体验主题公园发展空间，实现独特的VR动漫内容旅游布局，打造可复制可推广的中国VR内容的迪斯尼版本上作出的积极探索和创新。',
            ),
            4 => 
            array (
                'id' => 16,
                'column_id' => 8,
                'title' => '都新社区老年人日间照料中心',
                'subtitle' => '都新社区老年人日间照料中心',
                'view_number' => 43,
                'release_date' => '2019-04-19 14:41:32',
                'link' => NULL,
                'content' => '<p>都新社区老年人日间照料中心启动于2018年10月，是真正可以丰富老年人精神文化生活和引领社区文化发展的文化窗口。该馆以“四养为都 晚年新生”为主题，以顺时·养身、退守·养心、正荣·养气、清净·养情“四养”为脉络，合理布局功能区，并将文化融入其中进行打造。同时，紧紧抓住时代背景，充分展现老年人日间照料中心在老年人生活照料、保健康复、娱乐、精神慰藉等方面的优势，打造独具特色的社区老年人日间照料中心。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148076_8pd86ViBsw.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148079_sgCsUNkJmZ.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148083_9mWtwrGQAY.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148088_ERj8Zx0mJY.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148093_WLeGIYEehY.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148096_qEqA0v8UnH.jpg" style="max-width:100%;"><br></p><p><br></p><p><br></p>',
                'created_at' => '2019-04-26 14:41:32',
                'updated_at' => '2019-07-05 11:15:58',
                'is_index' => 1,
                'introduction' => '都新社区老年人日间照料中心启动于2018年10月，是真正可以丰富老年人精神文化生活和引领社区文化发展的文化窗口。该馆以“四养为都 晚年新生”为主题，以顺时·养身、退守·养心、正荣·养气、清净·养情“四养”为脉络，合理布局功能区，并将文化融入其中进行打造。同时，紧紧抓住时代背景，充分展现老年人日间照料中心在老年人生活照料、保健康复、娱乐、精神慰藉等方面的优势，打造独具特色的社区老年人日间照料中心。',
            ),
            5 => 
            array (
                'id' => 18,
                'column_id' => 8,
                'title' => '关岭民族高级中学校史馆',
                'subtitle' => '关岭民族高级中学校史馆',
                'view_number' => 18,
                'release_date' => '2019-04-21 14:44:38',
                'link' => NULL,
                'content' => '<p>展馆位于贵州省安顺市关岭县，以“关岭文脉 民中记忆”为主题，以数字75、3、1……为线索，串联民中发展历程、教学特色、教育精英和著名校友等。并通过传统与现代相结合的模式，在文字、图片、实物基础上，配以模型、雕塑、声光电等现代立体表现手法，艺术化地展示关岭民中的发展足迹，以及一代代民中人不懈的奋斗精神，将学校办学理念和学校精神文化以简约古朴、儒雅庄重又时尚大气的方式展现出来，使展厅具备较强视觉冲击力、艺术感染力和思想震撼力，成为学校文化积淀、凝聚师生、对外交流及展示自我形象的一流平台。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148035_imsm1nX3K1.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148039_XC7jYY4mnS.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148042_boUAEIJlPC.jpg" style="max-width:100%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148045_uDQE3tWZCB.jpg" style="max-width: 100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148051_4XHUASgEPx.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148055_PpJu9vS9lr.jpg" style="max-width:100%;"><br></p><p><br></p>',
                'created_at' => '2019-04-26 14:44:38',
                'updated_at' => '2019-07-09 22:23:17',
                'is_index' => 0,
                'introduction' => '展馆位于贵州省安顺市关岭县，以“关岭文脉 民中记忆”为主题，以数字75、3、1……为线索，串联民中发展历程、教学特色、教育精英和著名校友等。并通过传统与现代相结合的模式，在文字、图片、实物基础上，配以模型、雕塑、声光电等现代立体表现手法，艺术化地展示关岭民中的发展足迹，以及一代代民中人不懈的奋斗精神，将学校办学理念和学校精神文化以简约古朴、儒雅庄重又时尚大气的方式展现出来，使展厅具备较强视觉冲击力、艺术感染力和思想震撼力，成为学校文化积淀、凝聚师生、对外交流及展示自我形象的一流平台。',
            ),
            6 => 
            array (
                'id' => 19,
                'column_id' => 8,
                'title' => '贵阳市白云区“蓬莱仙界”农耕文化博物馆',
                'subtitle' => '贵阳市白云区“蓬莱仙界”农耕文化博物馆',
                'view_number' => 14,
                'release_date' => '2019-04-06 14:45:48',
                'link' => NULL,
                'content' => '<p>“白云深处有农祠·蓬莱仙界悟耕耘”——白云区蓬莱仙界农耕文化博物馆通过收集梳理我省乃至我国有关农耕文化的文字、图片和实物，以我国从原始社会到奴隶社会，从封建社会到社会主义初级阶段，从自古农民缴租纳税到国家废除农业税的历史过程为主线，让参观者对我国璀璨丰富的农耕文化有一个外在的欣赏和内在的感悟。通过参观，让参观者在感受中国广大农民的勤劳、智慧和艰辛之余，从心灵上感悟农耕文化对华夏民族的价值与意义。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148005_BTdd1ZP4MA.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148009_MdY5Fb0lAJ.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562148012_7RUYkvmsk2.jpg" style="max-width:100%;"><br></p><p><br></p><p><br></p>',
                'created_at' => '2019-04-26 14:45:48',
                'updated_at' => '2019-07-05 11:10:59',
                'is_index' => 0,
                'introduction' => '“白云深处有农祠·蓬莱仙界悟耕耘”——白云区蓬莱仙界农耕文化博物馆通过收集梳理我省乃至我国有关农耕文化的文字、图片和实物，以我国从原始社会到奴隶社会，从封建社会到社会主义初级阶段，从自古农民缴租纳税到国家废除农业税的历史过程为主线，让参观者对我国璀璨丰富的农耕文化有一个外在的欣赏和内在的感悟。通过参观，让参观者在感受中国广大农民的勤劳、智慧和艰辛之余，从心灵上感悟农耕文化对华夏民族的价值与意义。',
            ),
            7 => 
            array (
                'id' => 20,
                'column_id' => 8,
                'title' => '贵阳市第一中学校园文化景观提升',
                'subtitle' => '贵阳市第一中学校园文化景观提升',
                'view_number' => 12,
                'release_date' => '2019-04-16 14:48:27',
                'link' => NULL,
                'content' => '<p>项目位于贵阳市观山湖区贵阳市第一中学新校区。贵阳一中是贵州省第一所一类示范性高中，校区占地29.5万平方米，其前身为晚清礼部尚书李端棻与任可澄等贵州名宿于1906年创办的贵州通省公立学堂，与近现代教育诞生、民族命运浮沉、新中国建立发展紧密结合，因此，策划围绕“一轴四园”（一轴：学校大门—中心活动广场，四园：学园、家园、乐园、公园）深化景观概念，并通过对不同功能区的不同设计手法，诠释校园精神，体现教育环境本质。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147960_VwmwXJE4ji.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147963_Uss4QddHYH.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147968_75YG6na1q9.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147972_tAC5ndj22p.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147975_1hFSEhCDJe.jpg" style="max-width:100%;"><br></p>',
                'created_at' => '2019-04-26 14:48:27',
                'updated_at' => '2019-07-08 14:26:11',
                'is_index' => 1,
                'introduction' => '竣工时间：2016年10月
项目位于贵阳市观山湖区贵阳市第一中学新校区。贵阳一中是贵州省第一所一类示范性高中，校区占地29.5万平方米，其前身为晚清礼部尚书李端棻与任可澄等贵州名宿于1906年创办的贵州通省公立学堂，与近现代教育诞生、民族命运浮沉、新中国建立发展紧密结合，因此，策划围绕“一轴四园”（一轴：学校大门—中心活动广场，四园：学园、家园、乐园、公园）深化景观概念，并通过对不同功能区的不同设计手法，诠释校园精神，体现教育环境本质。',
            ),
            8 => 
            array (
                'id' => 21,
                'column_id' => 8,
                'title' => '贵州山地交通博物馆',
                'subtitle' => '贵州山地交通博物馆',
                'view_number' => 17,
                'release_date' => '2019-04-28 14:50:35',
                'link' => NULL,
                'content' => '<p>2018年2月启动，建设面积3000平方米，历时3个月竣工。该馆结合贵州山地交通实际，总结出“天堑通途 逐梦黔行”的主题，展示独具贵州特色的山地交通建设、峡谷桥梁建设的环境、技术、荣誉和成就，以交通的视角传播交通文化、展现交通新貌，让参观者通过交通发展了解贵州发展，感悟贵州“天堑变通途”的交通精神和后发赶超的贵州精神；展示以交通教育为特色的学校发展历程、创新办学和荣誉成果。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147897_1z4cpr8jc1.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147901_fsw1TDvoIy.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147905_A75yg2Qagr.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147909_iCjJNWttLY.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147913_nK8vUodfkB.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147924_w1n12g3Dgb.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147930_b3sE2UXKjB.jpg" style="max-width:100%;"><br></p>',
                'created_at' => '2019-04-26 14:50:35',
                'updated_at' => '2019-07-03 17:58:52',
                'is_index' => 1,
                'introduction' => '2018年2月启动，建设面积3000平方米，历时3个月竣工。该馆结合贵州山地交通实际，总结出“天堑通途 逐梦黔行”的主题，展示独具贵州特色的山地交通建设、峡谷桥梁建设的环境、技术、荣誉和成就，以交通的视角传播交通文化、展现交通新貌，让参观者通过交通发展了解贵州发展，感悟贵州“天堑变通途”的交通精神和后发赶超的贵州精神；展示以交通教育为特色的学校发展历程、创新办学和荣誉成果。',
            ),
            9 => 
            array (
                'id' => 23,
                'column_id' => 8,
                'title' => '贵州省图书馆历史陈列室',
                'subtitle' => '贵州省图书馆历史陈列室',
                'view_number' => 9,
                'release_date' => '2019-04-08 14:53:08',
                'link' => NULL,
                'content' => '<p>贵州省图书馆历史陈列室于2017年12月建成，该馆紧扣“薪火相传 书香致远”的主题，通过整合贵州省图书馆现存资料，收集散落的历史故事、珍贵的旧照片、古色古香的图书等，经过精心策划和设计，将其分为大事记、岁月如歌、协作引领、春华秋实、众擎易举五个部分，发展史上的各个阶段详实、有趣地展现出来。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147849_WrPGtURiza.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147853_XeiK5cyN7F.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147859_TZJtsqPpIP.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147863_61SvVkqdX8.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147869_ULxAYOwO9s.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147874_vLEN1en0Ww.jpg" style="max-width:100%;"><br></p>',
                'created_at' => '2019-04-26 14:53:08',
                'updated_at' => '2019-07-04 02:04:33',
                'is_index' => 1,
                'introduction' => '贵州省图书馆历史陈列室于2017年12月建成，该馆紧扣“薪火相传 书香致远”的主题，通过整合贵州省图书馆现存资料，收集散落的历史故事、珍贵的旧照片、古色古香的图书等，经过精心策划和设计，将其分为大事记、岁月如歌、协作引领、春华秋实、众擎易举五个部分，发展史上的各个阶段详实、有趣地展现出来。',
            ),
            10 => 
            array (
                'id' => 24,
                'column_id' => 8,
                'title' => '贵州师范大学博物馆',
                'subtitle' => '贵州师范大学博物馆',
                'view_number' => 31,
                'release_date' => '2019-04-30 14:54:02',
                'link' => NULL,
                'content' => '<p><br></p><p align="center"><font face="微软雅黑">贵州师范大学博物馆于2018年11月启动建设，规模约6500平方米，</font></p><p align="center"><font face="微软雅黑"><br></font></p><p align="center"><font face="微软雅黑">是一个集文化知识性、服务互动性、历史艺术性、共享共建性为一体，融体验型、趣味型、分享醒、</font></p><p align="center"><font face="微软雅黑"><br></font></p><p align="center"><font face="微软雅黑">智慧型为一身的展陈文化艺术空间。该馆以“见山”为主题，通过“见”的小视角，将山地、生态、人文和研究应用作为主要内容，分为见形、见灵、见神、见智、见道五个部分，</font></p><p align="center"><br></p><p align="center"><font face="微软雅黑">讲述沧海桑田的地质变迁，人类起源的故土乡愁和贵州这片土地的神奇、神性和生活在这片土地上的族群及他们的文化、艺术、生活、信仰。</font></p><p><font face="微软雅黑"></font><br></p><p><font face="微软雅黑"></font><br></p><ol><li><div align="center"><img style="max-width:100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147743_6ASId935h8.jpg"> <img style="max-width:100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147747_ItlI9LQFHN.jpg"><br></div></li><li><div align="center"><img style="max-width:100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147750_ZCpiLbQum7.jpg"><span>&nbsp; </span><img style="max-width: 100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147754_LI9H1vhN9E.jpg"><br></div></li><li><div align="center"><img style="max-width:100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147762_YBVtitYIKd.jpg"><br></div></li><li><div align="center"><img style="max-width:100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147767_wUMj9D9ASk.jpg"><br></div></li></ol>',
                'created_at' => '2019-04-26 14:54:02',
                'updated_at' => '2019-07-09 23:02:28',
                'is_index' => 1,
                'introduction' => '贵州师范大学博物馆于2018年11月启动建设，规模约6500平方米，是一个集文化知识性、服务互动性、历史艺术性、共享共建性为一体，融体验型、趣味型、分享醒、智慧型为一身的展陈文化艺术空间。该馆以“见山”为主题，通过“见”的小视角，将山地、生态、人文和研究应用作为主要内容，分为见形、见灵、见神、见智、见道五个部分，讲述沧海桑田的地质变迁，人类起源的故土乡愁和贵州这片土地的神奇、神性和生活在这片土地上的族群及他们的文化、艺术、生活、信仰。',
            ),
            11 => 
            array (
                'id' => 25,
                'column_id' => 8,
                'title' => '贵州师范大学校史馆',
                'subtitle' => '贵州师范大学校史馆',
                'view_number' => 24,
                'release_date' => '2019-04-25 14:55:03',
                'link' => NULL,
                'content' => '<p>启动于2018年8月，是一个历史探寻地、精神溯源地、心灵感知地、未来畅想地；一个集历史文化梳理、精神回溯展示、发展探索展望为一体的历史人文空间。该馆以“师道·年轮”为主题，以“师道为灵，香樟为形；师道为魂，香樟为象”，围绕贵州师范大学遵循师道、传承师道、弘扬师道这个核心，以香樟的品质、性格和生命力为意象，分为启道·烽火辟莽、立道·生根树本、执道·繁枝茂叶、大道·成材成林、循道·生生不息五个部分，结合立体多态的展陈艺术及呈现手法，展示了贵州师范大学悠久的办学历史、卓越的学人品质、优秀的学校品格等所构成的大学精神、大学文化。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147692_KRPZlXl12b.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147699_3ZjKZsbfLw.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147703_7lh7tZS6Wn.png" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147708_pqg4xEPvZD.png" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147712_zTW08Tnq4C.png" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147716_n9R2HsL1IK.png" style="max-width:100%;"><br></p>',
                'created_at' => '2019-04-26 14:55:03',
                'updated_at' => '2019-07-10 17:12:33',
                'is_index' => 1,
                'introduction' => '启动于2018年8月，是一个历史探寻地、精神溯源地、心灵感知地、未来畅想地；一个集历史文化梳理、精神回溯展示、发展探索展望为一体的历史人文空间。该馆以“师道·年轮”为主题，以“师道为灵，香樟为形；师道为魂，香樟为象”，围绕贵州师范大学遵循师道、传承师道、弘扬师道这个核心，以香樟的品质、性格和生命力为意象，分为启道·烽火辟莽、立道·生根树本、执道·繁枝茂叶、大道·成材成林、循道·生生不息五个部分，结合立体多态的展陈艺术及呈现手法，展示了贵州师范大学悠久的办学历史、卓越的学人品质、优秀的学校品格等所构成的大学精神、大学文化。',
            ),
            12 => 
            array (
                'id' => 26,
                'column_id' => 8,
                'title' => '锦屏文书特藏馆',
                'subtitle' => '锦屏文书特藏馆',
                'view_number' => 6,
                'release_date' => '2019-04-10 14:56:40',
                'link' => NULL,
                'content' => '<p>于2015年8月建成投入使用，目前收藏锦屏文书6万余件，实现数字化典藏4.5万余件，基本构建了新型现代文史书馆的馆建模式，不仅有效保护了锦屏文书，还为锦屏文书的研究提供了丰富的历史资料。特藏馆展陈以主题前厅、A厅“锦绣河山·清<br>江水韵”、B厅“屏风九叠·杉木之乡”、C厅“文兴武匿·商契民约”“书影家藏·弘诚扬信”4个部分组成，以传统结合科技的融合方式，将清水江木商文化和锦屏文书的前世今生淋漓尽致的展现在每一个观者的面前。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147663_mNgIE1JJ00.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147666_Fz2aG3NKr5.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147670_nPpSZD8TCP.jpg" style="max-width:100%;"><br></p>',
                'created_at' => '2019-04-26 14:56:40',
                'updated_at' => '2019-07-06 03:44:39',
                'is_index' => 1,
                'introduction' => '于2015年8月建成投入使用，目前收藏锦屏文书6万余件，实现数字化典藏4.5万余件，基本构建了新型现代文史书馆的馆建模式，不仅有效保护了锦屏文书，还为锦屏文书的研究提供了丰富的历史资料。特藏馆展陈以主题前厅、A厅“锦绣河山·清
江水韵”、B厅“屏风九叠·杉木之乡”、C厅“文兴武匿·商契民约”“书影家藏·弘诚扬信”4个部分组成，以传统结合科技的融合方式，将清水江木商文化和锦屏文书的前世今生淋漓尽致的展现在每一个观者的面前。',
            ),
            13 => 
            array (
                'id' => 27,
                'column_id' => 8,
                'title' => '六盘水市社会主义核心价值观主题公园（凤池公园）',
                'subtitle' => '六盘水市社会主义核心价值观主题公园（凤池公园）',
                'view_number' => 8,
                'release_date' => '2019-04-17 14:58:05',
                'link' => NULL,
                'content' => '<p>优秀传统文化是社会主义核心价值观的血脉和源泉。对优秀传统文化的传承和对社会主义核心价值观的践行。项目建于六盘水市凤池公园，公园占地约4500平方米，是响应贵州省委省政府号召，为深入贯彻落实党的十九大精神，积极培育和践行社会主义核心价值观而建。公园景观打造主题为“三线精神·凉都故事”，在此主题下，以“中国梦·凉都魂”为规划脉络，结合六盘水城市精神，设计打造系列景观，讲好六盘水文化故事，将社会主义核心价值融入市民生活。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147624_agVWG39c7D.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147628_BqcP0YCUKl.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147633_Uot3C9oI3e.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147640_gDcBsav6bO.jpg" style="max-width:100%;"><br></p>',
                'created_at' => '2019-04-26 14:58:05',
                'updated_at' => '2019-07-09 23:09:14',
                'is_index' => 1,
                'introduction' => '建成时间：2017年12月
优秀传统文化是社会主义核心价值观的血脉和源泉。对优秀传统文化的传承和对社会主义核心价值观的践行。项目建于六盘水市凤池公园，公园占地约4500平方米，是响应贵州省委省政府号召，为深入贯彻落实党的十九大精神，积极培育和践行社会主义核心价值观而建。公园景观打造主题为“三线精神·凉都故事”，在此主题下，以“中国梦·凉都魂”为规划脉络，结合六盘水城市精神，设计打造系列景观，讲好六盘水文化故事，将社会主义核心价值融入市民生活。',
            ),
            14 => 
            array (
                'id' => 28,
                'column_id' => 8,
                'title' => '龙里水乡互动展陈馆',
                'subtitle' => '龙里水乡互动展陈馆',
                'view_number' => 7,
                'release_date' => '2019-04-20 14:58:46',
                'link' => NULL,
                'content' => '<p>龙里水乡是一个集历史文化街区、博展商贸会务、养生度假休闲及南丝路千年古驿站等为一体的特色文化旅游项目。龙里水乡展示馆主体为仿四合院式建筑，以图文、影音为主要表达形式，创造一个展示空间、体验空间、文化空间、艺术空间，以“城”为设计的主线，通过简约现代、中式禅意的空间表达，将参观体验同空间体验融为一体，让每一个身在展馆中的人，感受到“龙里水乡”的匠心独特和文化底蕴，展现“龙里水乡”的美好前景。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147594_b32LhS4CU6.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147598_IFJxm6ukz7.jpg" style="max-width:100%;"><br></p><p><br></p>',
                'created_at' => '2019-04-26 14:58:46',
                'updated_at' => '2019-07-05 11:14:17',
                'is_index' => 1,
                'introduction' => '龙里水乡是一个集历史文化街区、博展商贸会务、养生度假休闲及南丝路千年古驿站等为一体的特色文化旅游项目。龙里水乡展示馆主体为仿四合院式建筑，以图文、影音为主要表达形式，创造一个展示空间、体验空间、文化空间、艺术空间，以“城”为设计的主线，通过简约现代、中式禅意的空间表达，将参观体验同空间体验融为一体，让每一个身在展馆中的人，感受到“龙里水乡”的匠心独特和文化底蕴，展现“龙里水乡”的美好前景。',
            ),
            15 => 
            array (
                'id' => 29,
                'column_id' => 8,
                'title' => '平坝法院党建教育及廉政文化中心',
                'subtitle' => '平坝法院党建教育及廉政文化中心',
                'view_number' => 4,
                'release_date' => '2019-04-12 14:59:35',
                'link' => NULL,
                'content' => '<p>平坝法院党建教育及廉政文化中心于2018年5月启动，建设面积为500平方米，历时7个月竣工。该中心以“崇法尚德 安民平义”为主题，关联平坝属地文化，贴近审判实际、贴近司法人员、贴近人民，将法治文化宣教中心打造成连接过去与未来的文化载体，成为一个展示法院文化积淀、传播司法文明、弘扬法治精神的文化中心。以此追忆平坝法院峥嵘岁月，彰显司法为民、公正司法的社会主义法治精神，凝聚司法力量。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147546_VtCpRSS7sI.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147551_q4LrqZ0bzU.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147556_IvRnwhjjgS.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147561_jo8V1kY8l2.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147567_Vkck8xrKZc.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147571_7KBs32WDEl.jpg" style="max-width:100%;"><br></p><p><br></p>',
                'created_at' => '2019-04-26 14:59:35',
                'updated_at' => '2019-07-06 00:43:51',
                'is_index' => 1,
                'introduction' => '平坝法院党建教育及廉政文化中心于2018年5月启动，建设面积为500平方米，历时7个月竣工。该中心以“崇法尚德 安民平义”为主题，关联平坝属地文化，贴近审判实际、贴近司法人员、贴近人民，将法治文化宣教中心打造成连接过去与未来的文化载体，成为一个展示法院文化积淀、传播司法文明、弘扬法治精神的文化中心。以此追忆平坝法院峥嵘岁月，彰显司法为民、公正司法的社会主义法治精神，凝聚司法力量。',
            ),
            16 => 
            array (
                'id' => 30,
                'column_id' => 8,
                'title' => '黔东南凯里“诗·悟”阳明书院',
                'subtitle' => '黔东南凯里“诗·悟”阳明书院',
                'view_number' => 11,
                'release_date' => '2019-04-27 15:00:20',
                'link' => NULL,
                'content' => '<p>阳明书院建筑面积500平，以“诗”破题，通过由浅及深的“本悟、思悟、契悟、渐悟、大悟、传悟和时悟”七个展陈空间，深入浅出地讲述了阳明生而不凡、立志成圣、龙场悟道等事迹，阳明之悟由初级到高级、由表面到深刻、由量变到质变的复合过程，以及阳明心学在下司和后代的传承理路。利用原有建筑优势，通过中式情景空间、合理留白、简约设计和禅意表达，阳明书院成为人与建筑、人与空间、人与景观、人与思想的对话空间，让每一位走进阳明书院的人，走近阳明的心学世界，体悟他的精神境界。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147491_4lRG8pWS2K.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147498_DflRQ1lElQ.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147507_q3Qz879tHs.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147513_x1THBfZKdc.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147519_CZ1clkLv7J.jpg" style="max-width:100%;"><br></p>',
                'created_at' => '2019-04-26 15:00:20',
                'updated_at' => '2019-07-05 10:59:15',
                'is_index' => 1,
                'introduction' => '阳明书院建筑面积500平，以“诗”破题，通过由浅及深的“本悟、思悟、契悟、渐悟、大悟、传悟和时悟”七个展陈空间，深入浅出地讲述了阳明生而不凡、立志成圣、龙场悟道等事迹，阳明之悟由初级到高级、由表面到深刻、由量变到质变的复合过程，以及阳明心学在下司和后代的传承理路。利用原有建筑优势，通过中式情景空间、合理留白、简约设计和禅意表达，阳明书院成为人与建筑、人与空间、人与景观、人与思想的对话空间，让每一位走进阳明书院的人，走近阳明的心学世界，体悟他的精神境界。',
            ),
            17 => 
            array (
                'id' => 32,
                'column_id' => 8,
                'title' => '黔东南凯里苗侗医药博物馆',
                'subtitle' => '黔东南凯里苗侗医药博物馆',
                'view_number' => 8,
                'release_date' => '2019-04-28 15:02:12',
                'link' => NULL,
                'content' => '<p>凯里苗侗医药博物馆是一个集历史性、文化性、艺术性、互动性为一体，融体验型、主动型、分享型、智慧型为一身的展陈文化艺术空间，建筑面积2000平方米。以神秘感作为主基调，凸显展馆文化性和功能性，将苗侗文化贯穿在苗侗医药文化发展展示的始终，使展馆既展示苗侗文化起源、发展、传承脉络，又凸显苗侗医药文化的神秘与神奇，使展馆成为黔东南苗侗文化的外宣窗口、苗侗医药升华之地和苗侗医药文化街的活态互动展示平台。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147438_M8fRsaXGMT.png" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147442_KcH02vty30.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147448_jLTcJUIWev.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147451_liZHF5dVwL.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147455_YVWmJBygtK.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147463_50kHN03dB7.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147466_Fr11myPRwW.png" style="max-width:100%;"><br></p><p><br></p>',
                'created_at' => '2019-04-26 15:02:12',
                'updated_at' => '2019-07-08 15:22:35',
                'is_index' => 1,
                'introduction' => '凯里苗侗医药博物馆是一个集历史性、文化性、艺术性、互动性为一体，融体验型、主动型、分享型、智慧型为一身的展陈文化艺术空间，建筑面积2000平方米。以神秘感作为主基调，凸显展馆文化性和功能性，将苗侗文化贯穿在苗侗医药文化发展展示的始终，使展馆既展示苗侗文化起源、发展、传承脉络，又凸显苗侗医药文化的神秘与神奇，使展馆成为黔东南苗侗文化的外宣窗口、苗侗医药升华之地和苗侗医药文化街的活态互动展示平台。',
            ),
            18 => 
            array (
                'id' => 33,
                'column_id' => 8,
                'title' => '黔东南下司古镇“忆·象”活态展示馆',
                'subtitle' => '黔东南下司古镇“忆·象”活态展示馆',
                'view_number' => 13,
                'release_date' => '2019-04-29 15:03:00',
                'link' => NULL,
                'content' => '<p>留住记忆，想象价值，是为“忆象”，“下司忆象活态历史展示馆”作为下司记忆和想象的物质载体，于昔日的两湖会馆——禹王宫中得建，建设面积1200平方米。通过因水而起、因商而兴、因人而彰和因旅而旺四个展厅，以时间为主线，以故事为牵引，再现下司古镇的形成、黄金时代、文化传承及美好未来，展现下司古镇商业发展的百年兴衰。这个集艺术性、文化性、历史性为一体的展陈文化艺术空间，正是下司独有的记忆群落，浓缩着下司的历史记忆，凝聚着下司的人文精神，走进其间，洞悉源起、身临繁华、体悟魂灵。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147389_ZHaDSf1NBG.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147393_pAsPwf6rG2.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147397_2zmoLo36Pg.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147401_JWnFZUJv45.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147407_JJ05qb0463.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147412_CYMpZlZQ85.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147415_lMUqPl4Yxz.jpg" style="max-width:100%;"><br></p><p><br></p>',
                'created_at' => '2019-04-26 15:03:00',
                'updated_at' => '2019-07-09 19:41:15',
                'is_index' => 1,
                'introduction' => '留住记忆，想象价值，是为“忆象”，“下司忆象活态历史展示馆”作为下司记忆和想象的物质载体，于昔日的两湖会馆——禹王宫中得建，建设面积1200平方米。通过因水而起、因商而兴、因人而彰和因旅而旺四个展厅，以时间为主线，以故事为牵引，再现下司古镇的形成、黄金时代、文化传承及美好未来，展现下司古镇商业发展的百年兴衰。这个集艺术性、文化性、历史性为一体的展陈文化艺术空间，正是下司独有的记忆群落，浓缩着下司的历史记忆，凝聚着下司的人文精神，走进其间，洞悉源起、身临繁华、体悟魂灵。',
            ),
            19 => 
            array (
                'id' => 34,
                'column_id' => 8,
                'title' => '清镇市红枫第三小学校园文化建设',
                'subtitle' => '清镇市红枫第三小学校园文化建设',
                'view_number' => 6,
                'release_date' => '2019-04-15 15:03:49',
                'link' => NULL,
                'content' => '<p>清镇市红枫第三小学校园文化建设于2018年1月开始启动，建设面积为5000平方米，历时7个月竣工。本次文化建设紧扣“生态家园 文明校园”办学目标，秉承“润育生命本真”的学校精神，以“一滴清露幼苗醒 和风细雨万物苏”为主题，以“创建生态教育 享受教育生态”为各区域规划建设的主线，分为生、态、教、育四个部分，打造尊重自然、重视生态、留住文脉、满怀乡愁的校园文化。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147343_ZMqNp1FoZc.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147347_XFB4uMkPe2.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147354_Yo1SzEJZrz.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147357_NENUVQNYTm.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147362_2r0nUJgvkx.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147366_YepJlojUCM.jpg" style="max-width:100%;"><br></p><p><br></p>',
                'created_at' => '2019-04-26 15:03:49',
                'updated_at' => '2019-07-06 04:51:18',
                'is_index' => 1,
                'introduction' => '清镇市红枫第三小学校园文化建设于2018年1月开始启动，建设面积为5000平方米，历时7个月竣工。本次文化建设紧扣“生态家园 文明校园”办学目标，秉承“润育生命本真”的学校精神，以“一滴清露幼苗醒 和风细雨万物苏”为主题，以“创建生态教育 享受教育生态”为各区域规划建设的主线，分为生、态、教、育四个部分，打造尊重自然、重视生态、留住文脉、满怀乡愁的校园文化。',
            ),
            20 => 
            array (
                'id' => 35,
                'column_id' => 8,
                'title' => '清镇市红枫三小地理生态馆',
                'subtitle' => '清镇市红枫三小地理生态馆',
                'view_number' => 6,
                'release_date' => '2019-04-23 15:04:23',
                'link' => NULL,
                'content' => '<p>位于清镇市红枫三小校园内，于2019年3月建成。是立足红枫三小“面向未来”的生态教育理念建设而成，以“我们的朋友，地球！”为主题打造的一个独具三小特色的，以地理、生态环保为主题的互动体验式教学基地和展示馆，校园文化的精品与亮点，为中小学广泛开展生态地理教育提供活态样板。在趣味展示体验中揭示人与地理、地理与生态环境、生态环境与人类生存条件的内在科学联系，并把环境保护、可持续发展、社会文明等思想贯穿其中，将生态地理知识正确传递给少年儿童。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147300_quZoiM9Htm.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147305_3N94whNNpw.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147309_tXnZ5lVmJP.jpg" style="max-width:100%;"><br></p><p><br></p>',
                'created_at' => '2019-04-26 15:04:23',
                'updated_at' => '2019-07-05 02:10:45',
                'is_index' => 1,
                'introduction' => '位于清镇市红枫三小校园内，于2019年3月建成。是立足红枫三小“面向未来”的生态教育理念建设而成，以“我们的朋友，地球！”为主题打造的一个独具三小特色的，以地理、生态环保为主题的互动体验式教学基地和展示馆，校园文化的精品与亮点，为中小学广泛开展生态地理教育提供活态样板。在趣味展示体验中揭示人与地理、地理与生态环境、生态环境与人类生存条件的内在科学联系，并把环境保护、可持续发展、社会文明等思想贯穿其中，将生态地理知识正确传递给少年儿童。',
            ),
            21 => 
            array (
                'id' => 36,
                'column_id' => 8,
                'title' => '清镇市红枫三小禁毒教育馆',
                'subtitle' => '清镇市红枫三小禁毒教育馆',
                'view_number' => 5,
                'release_date' => '2019-04-22 15:05:05',
                'link' => NULL,
                'content' => '<p>作为学校教育第二课堂，清镇市红枫三小禁毒教育馆建设面积200余平方米，以儿童口语习惯、突出强调的倒装句式“毒品·我不”为主题，通过创意性内容展示结合场地条件，展示毒品危害，并打造识毒、防毒、拒毒、禁毒的完整生态体系，让全市少年儿童提高青少年识毒、防毒、拒毒、禁毒的意识和能力，都成为禁毒生态体系中的一部分，参与禁毒、健康生命，从而作为国家和未来的希望健康成长，凝聚起贵州发展的强大力量，实现伟大复兴的民族梦。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147257_QXHvjRM6AU.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147261_ZYQL3qFeUQ.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147265_QeYXFZSLMU.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147269_EZmmgBccmY.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147274_pX5OwZy4Y2.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147279_OXglHfIzEd.jpg" style="max-width:100%;"><br></p><p><br></p>',
                'created_at' => '2019-04-26 15:05:05',
                'updated_at' => '2019-07-05 05:05:16',
                'is_index' => 1,
                'introduction' => '作为学校教育第二课堂，清镇市红枫三小禁毒教育馆建设面积200余平方米，以儿童口语习惯、突出强调的倒装句式“毒品·我不”为主题，通过创意性内容展示结合场地条件，展示毒品危害，并打造识毒、防毒、拒毒、禁毒的完整生态体系，让全市少年儿童提高青少年识毒、防毒、拒毒、禁毒的意识和能力，都成为禁毒生态体系中的一部分，参与禁毒、健康生命，从而作为国家和未来的希望健康成长，凝聚起贵州发展的强大力量，实现伟大复兴的民族梦。',
            ),
            22 => 
            array (
                'id' => 37,
                'column_id' => 8,
                'title' => '清镇市卫城中学禁毒教育基地',
                'subtitle' => '清镇市卫城中学禁毒教育基地',
                'view_number' => 14,
                'release_date' => '2019-04-24 15:05:49',
                'link' => NULL,
                'content' => '<p>清镇市卫城中学禁毒教育基地开工于2019年2月，是一个禁毒趣味空间、体验空间、互动空间、警示空间。该馆围绕“禁毒卫·护花城”的主题，分为识毒区、展示区、视听区、互动成果区四大功能区，<br>展示包括毒品知识、危害、防范等，还包括国家禁毒政策、法律法规等内容。<br>以模型展示、视频音频、互动体验、真实案例和鲜活历史，与卫城中学少年宫和教学课堂相结合，有温度、有深度、有趣味地进行青少年禁毒教育工作。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147194_0CMcyaFQPX.png" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147198_UpZEDng9w4.png" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147203_e6adz3xpoA.png" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147214_owgIy163Hg.png" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147219_Qjiy2QaiZG.png" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147224_FxrYAW1Ip2.png" style="max-width:100%;"><br></p><p><br></p><p><br></p>',
                'created_at' => '2019-04-26 15:05:49',
                'updated_at' => '2019-07-09 19:40:44',
                'is_index' => 1,
                'introduction' => '清镇市卫城中学禁毒教育基地开工于2019年2月，是一个禁毒趣味空间、体验空间、互动空间、警示空间。该馆围绕“禁毒卫·护花城”的主题，分为识毒区、展示区、视听区、互动成果区四大功能区，展示包括毒品知识、危害、防范等，还包括国家禁毒政策、法律法规等内容。以模型展示、视频音频、互动体验、真实案例和鲜活历史，与卫城中学少年宫和教学课堂相结合，有温度、有深度、有趣味地进行青少年禁毒教育工作。',
            ),
            23 => 
            array (
                'id' => 40,
                'column_id' => 8,
                'title' => '云岩区红色文化展馆',
                'subtitle' => '云岩区红色文化展馆',
                'view_number' => 10,
                'release_date' => '2019-04-24 15:07:44',
                'link' => NULL,
                'content' => '<p>云岩区红色文化展馆启动于2019年1月，该馆以“筑魂”为主题，分为红之源·贵中文脉（城市历史文化的起承）、红之源·烽火岁月（街巷城垣留下的印迹）、红之灵·英雄传奇（革命志士铸就的风采）、红之魂·时代新章（党的建设引领的发展）四个部分。全馆围绕“以红筑魂·以文润魂”的核心理念，以不同层次的故事讲述和灵活多样的展陈手段，展示云岩的历史之美、国家之情、文化之风以及贵州精神，也激励着贵阳人民、贵州儿女振奋精神，助力贵州经济社会发展。</p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147146_V4Gq753XvU.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147152_5V8QTrXdRf.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147157_502p1Bje0B.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147163_7fN3THBAD1.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147168_7v9Bgmce9K.jpg" style="max-width:100%;"><br></p><p><br></p>',
                'created_at' => '2019-04-26 15:07:44',
                'updated_at' => '2019-07-04 16:34:38',
                'is_index' => 1,
                'introduction' => '云岩区红色文化展馆启动于2019年1月，该馆以“筑魂”为主题，分为红之源·贵中文脉（城市历史文化的起承）、红之源·烽火岁月（街巷城垣留下的印迹）、红之灵·英雄传奇（革命志士铸就的风采）、红之魂·时代新章（党的建设引领的发展）四个部分。全馆围绕“以红筑魂·以文润魂”的核心理念，以不同层次的故事讲述和灵活多样的展陈手段，展示云岩的历史之美、国家之情、文化之风以及贵州精神，也激励着贵阳人民、贵州儿女振奋精神，助力贵州经济社会发展。',
            ),
            24 => 
            array (
                'id' => 41,
                'column_id' => 8,
                'title' => '紫云自治县旅游文化形象及县域文化景观体系构建',
                'subtitle' => '紫云自治县旅游文化形象及县域文化景观体系构建',
                'view_number' => 21,
                'release_date' => '2019-04-18 15:08:50',
                'link' => NULL,
                'content' => '<p>项目位于安顺市紫云县，是对全县旅游文化景观体系的一次文化提升。<br>《亚鲁王》是安顺市紫云县非物质文化遗产，是国家级非遗，是紫云文化和旅游的灵魂。<br><br>因此，我们围绕亚鲁王的创世史、征战史、迁徙史和创业史，理清源头和落地，把一个民族深厚的历史文化和一个区域的创业发展的热潮结合起来，和旅游脱贫攻坚结合起来，以“问道亚鲁·秘境紫云”为主题，结合亚鲁王文化系统和神秘、多彩的苗族、布依族文化、民俗，设计、打造独具特色的文化旅游景观。<br><br>让紫云旅游和文化支撑既有深度，又有温度，还有力度。解决了紫云旅游文化形象及文化景观简、散、乱的三个现实痛点。<br></p><p><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147104_RkoxBlpO2G.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147109_NPQHiVdxPZ.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147115_Y8F6bbpwzh.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147119_REY9AV4Gg6.jpg" style="max-width:100%;"><br></p><p><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201907/03/1562147123_a6TcPFysUY.jpg" style="max-width:100%;"><br></p><p><br></p>',
                'created_at' => '2019-04-26 15:08:50',
                'updated_at' => '2019-07-05 11:02:08',
                'is_index' => 1,
                'introduction' => '建成时间：2018年6月
项目位于安顺市紫云县，是对全县旅游文化景观体系的一次文化提升。《亚鲁王》是安顺市紫云县非物质文化遗产，是国家级非遗，是紫云文化和旅游的灵魂。因此，我们围绕亚鲁王的创世史、征战史、迁徙史和创业史，理清源头和落地，把一个民族深厚的历史文化和一个区域的创业发展的热潮结合起来，和旅游脱贫攻坚结合起来，以“问道亚鲁·秘境紫云”为主题，结合亚鲁王文化系统和神秘、多彩的苗族、布依族文化、民俗，设计、打造独具特色的文化旅游景观。让紫云旅游和文化支撑既有深度，又有温度，还有力度。解决了紫云旅游文化形象及文化景观简、散、乱的三个现实痛点。',
            ),
            25 => 
            array (
                'id' => 43,
                'column_id' => 16,
                'title' => '180度孤幕影院',
                'subtitle' => NULL,
                'view_number' => 3,
                'release_date' => '2019-06-18 15:39:32',
                'link' => NULL,
                'content' => NULL,
                'created_at' => '2019-06-18 15:39:32',
                'updated_at' => '2019-06-20 10:05:36',
                'is_index' => 1,
                'introduction' => '由数字内容、投影系统、播放系统和集成系统、无缝屏接系统组成，具有超强的体验感和沉浸感。在观看影片时，观众被巨幅画面以及立体的声音所包围，从而产生真实的不同寻常的感受，自然而然的感觉自己是影片环境中的一员。',
            ),
            26 => 
            array (
                'id' => 44,
                'column_id' => 16,
                'title' => '360度弧幕影院',
                'subtitle' => NULL,
                'view_number' => 5,
                'release_date' => '2019-06-18 19:30:33',
                'link' => NULL,
                'content' => NULL,
                'created_at' => '2019-06-18 19:30:33',
                'updated_at' => '2019-06-19 11:19:11',
                'is_index' => 0,
                'introduction' => '表现水平360度范围内的全部景物，由于其屏幕半径宽大，观众的视野完全被包围，再配合环绕立体声系统，人们就好像置身于电影环境之中，可以前后左右地任意欣赏，这种身临其境之感是常规屏幕所不能相提并论的。',
            ),
            27 => 
            array (
                'id' => 45,
                'column_id' => 16,
                'title' => '虚拟立体互动平台',
                'subtitle' => NULL,
                'view_number' => 2,
                'release_date' => '2019-06-18 19:33:56',
                'link' => NULL,
                'content' => NULL,
                'created_at' => '2019-06-18 19:33:56',
                'updated_at' => '2019-06-19 11:21:35',
                'is_index' => 0,
                'introduction' => '集合了全息显示、虚拟交互、软件平台、内容开发的软硬件解决方案平台，是基于全息现实互动系统，结合3D显示屏和虚拟交互设备，实现虚拟与现实相结合的桌面人机交互产品',
            ),
            28 => 
            array (
                'id' => 46,
                'column_id' => 16,
                'title' => '三维数字投影沙盘',
                'subtitle' => NULL,
                'view_number' => 1,
                'release_date' => '2019-06-18 19:38:58',
                'link' => NULL,
                'content' => NULL,
                'created_at' => '2019-06-18 19:38:58',
                'updated_at' => '2019-06-19 11:17:02',
                'is_index' => 0,
                'introduction' => '又称数字沙盘投影系统、虚拟三维数字沙盘，它分为实体模型与虚拟影像相结合及全虚拟两种。投影沙盘是以计算机技术为核心的现代高科技手段生成逼真的三维图像模型，借助投影显示设备或其他显示设备把计算机上的三维或四维图形图像模型显示到台面上。',
            ),
            29 => 
            array (
                'id' => 47,
                'column_id' => 16,
                'title' => 'AR互动轨道屏',
                'subtitle' => NULL,
                'view_number' => 0,
                'release_date' => '2019-06-18 19:40:03',
                'link' => NULL,
                'content' => '<p><br></p>',
                'created_at' => '2019-06-18 19:40:03',
                'updated_at' => '2019-06-18 19:40:03',
                'is_index' => 0,
                'introduction' => '一款全新的多媒体展示设备，通过这种新颖的展现方式，可为用户提供更具有层次的产品展示方案，屏体可电动、可手动、可触摸控制、一组项目内可多组显示屏。通过这种虚实相合的展现方式，可让参观者更深入的了解到相关信息。',
            ),
            30 => 
            array (
                'id' => 48,
                'column_id' => 16,
                'title' => '沉浸式CAVE展示系统',
                'subtitle' => NULL,
                'view_number' => 6,
                'release_date' => '2019-06-18 19:44:32',
                'link' => NULL,
                'content' => '<p style="text-align: center;"><iframe height="498" width="510" src="http://player.youku.com/embed/XNDIwNDUwNjcyMA==" frameborder="0" \'allowfullscreen\'=""></iframe></p><p><br></p>',
                'created_at' => '2019-06-18 19:44:32',
                'updated_at' => '2019-06-20 11:20:29',
                'is_index' => 0,
                'introduction' => '一种基于投影的虚拟现实系统，它由围绕观察者的四个投影面组成。四个投影面组成一个立方体结构，其中三个墙面采用背投方式，地面采用正投方式。当观察者在CAVE中走动时，系统自动计算每个投影面正确的立体透视图象。同时，观察者手握一种称为Wand的传感器，与虚拟环境进行交互。',
            ),
            31 => 
            array (
                'id' => 49,
                'column_id' => 18,
                'title' => '黔东南下司古镇“下司忆·象活态展示馆”',
                'subtitle' => NULL,
                'view_number' => 9,
                'release_date' => '2019-06-24 17:31:38',
                'link' => NULL,
                'content' => '<p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><span style="font-family: 宋体; font-size: 10.5pt; text-indent: 24pt;">下司镇地处清水江上游，位于凯里市西偏南部，因明清两代属平定长官司的分司治所，又因地处平定下游，得名下司。</span><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">下司从明清时代起便是清水江上游商贾云集、繁荣热闹的商埠重镇，历史上这里马帮成群，商号、会馆、客栈遍布街头巷尾。曾被人誉为</font>“小上海”、有“清水江上的明珠”之美称，多以苗族、仡佬族等少数民族聚居。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">留住记忆，想象价值，是为</font>“忆·象”</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">“下司忆·象活态历史展示馆”由宽谷文化团队策划、设计、建设完成。它作为下司记忆和想象的物质载体，坐落于昔日的两湖会馆——禹王宫。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">展示馆分为</font><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">因水而起</font> &nbsp;<font face="宋体">因商而兴 </font><font face="Calibri">&nbsp;</font><font face="宋体">因人而彰</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">&nbsp;<font face="宋体">三个展厅</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">以时间为主线，以故事为牵引，再现下司古镇的形成、黄金时代、文化传承及美好未来，展现下司古镇商业发展的百年兴衰。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">这个集艺术性、文化性、历史性为一体的展陈文化艺术空间，正是下司独有的记忆群落，浓缩着下司的历史记忆，凝聚着下司的人文精神，走进其间，洞悉源起、身临繁华、体悟魂灵。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561368697_MLVdbxE3Fu.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">下司忆</font>·象活态历史展示馆自开馆运营以来，向各地游客系统展示了下司历史文化，也得到了各级领导的广泛关注，<font face="Calibri">2017</font><font face="宋体">年</font><font face="Calibri">7</font><font face="宋体">月</font><font face="Calibri">6</font><font face="宋体">日，时任贵州省委书记、省人大常委会主任陈敏尔，贵州省副省长刘远坤，黔东南州委书记黄秋斌等领导到馆参观，并给予了充分肯定。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">&nbsp;<font face="宋体">因水而起，向水而生</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">水是万物之源，下司因清水江而繁荣，因此以水为线索进行策划设计，把下司的地理位置、马帮文化、码头文化、木商文化等以场景还原，展品展示和故事短片等形式展现出来，重现清水江昔日的繁华。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">参观者从正门进入后一路沿清水江顺流而下，到达下司古镇，沿途可见两岸林立的商铺、热闹的码头与川流不息商帮和马帮。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">因商而兴，因商而荣</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">商业是下司重要的符号，为呈现复原下司的商业繁荣，本案的设计构思便以</font>“街”的形式来展开，并采用合理的灯光设计，以故事化的场景和图文、声、影为展示手段，营造出下司早、中、晚的商业景象，将下司人的一天在此展现，充分体现了下司商业的热闹氛围。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">通过各式商铺的情景还原，使参观者身临其境体验下司古镇繁华的商业街区，与形态各异的人物造型来个</font>“零距离”的亲密接触。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">因人而彰，因人而承</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">“美不自美，因人而彰”，其意为，美是隐逸的、隐藏的，需要人来彰显才能显现。因此，展厅主要以讲故事的方式，展现下司人的生活，同时，展现下司人彰而有承，传承下司厚重的历史文化，彰显一个“养心、养情”的西南小镇。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">以错落有致的下司人物展示墙与下司犬忠心救主的</font>AR<font face="宋体">互动故事，生动展现了下司人与自然、人与动物、人与人之间的和谐关系。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">对下司独特的节庆节日、龙舟赛精神和人文历史传承及现状进行展示，全方位展现下司人的生活情趣和下司古镇的闲逸。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">在对下司历史文化和现状的展示中，我们更侧重于通过适当的展示手段与技术揭示展品背后的内涵和情感世界，尝试使观众较全面和系统地了解其本身所包含的精神文化，以及它们与人类生活的关系。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p><!--[if gte mso 9]><xml><w:LatentStyles DefLockedState="false"  DefUnhideWhenUsed="true"  DefSemiHidden="true"  DefQFormat="false"  DefPriority="99"  LatentStyleCount="260" >
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footer" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="caption" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of figures" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope return" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="line number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="page number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of authorities" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="macro" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toa heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Title" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Closing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Default Paragraph Font" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Message Header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Subtitle" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Salutation" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Date" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Note Heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Block Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Hyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="FollowedHyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Strong" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Emphasis" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Document Map" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Plain Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="E-mail Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal (Web)" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Acronym" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Cite" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Code" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Definition" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Keyboard" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Preformatted" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Sample" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Typewriter" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Variable" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Table" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation subject" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / a / i" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / 1.1 / 1.1.1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Article / Section" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Contemporary" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Elegant" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Professional" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Balloon Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Theme" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Placeholder Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No Spacing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Paragraph" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Intense Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 6" ></w:LsdException>
</w:LatentStyles></xml><![endif]--><style>
@font-face{
font-family:"Times New Roman";
}

@font-face{
font-family:"宋体";
}

@font-face{
font-family:"Calibri";
}

p.MsoNormal{
mso-style-name:正文;
mso-style-parent:"";
margin:0pt;
margin-bottom:.0001pt;
mso-pagination:none;
text-align:justify;
text-justify:inter-ideograph;
font-family:Calibri;
mso-fareast-font-family:宋体;
mso-bidi-font-family:\'Times New Roman\';
font-size:10.5000pt;
mso-font-kerning:1.0000pt;
}

span.msoIns{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:underline;
text-underline:single;
color:blue;
}

span.msoDel{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:line-through;
color:red;
}
@page{mso-page-border-surround-header:no;
mso-page-border-surround-footer:no;}@page Section0{
margin-top:72.0000pt;
margin-bottom:72.0000pt;
margin-left:90.0000pt;
margin-right:90.0000pt;
size:595.3000pt 841.9000pt;
layout-grid:15.6000pt;
}
div.Section0{page:Section0;}</style></p><p class="MsoNormal"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';color:rgb(0,0,0);="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">好啦，</font>“下司忆·象活态历史展示馆”就介绍到这里，接下来我们还会陆续推出其他的展馆案例，如果你也喜欢我们的风格，记得继续关注我们宽谷文化哦<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';color:rgb(0,0,0);="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">~<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p>',
                'created_at' => '2019-06-24 17:31:38',
                'updated_at' => '2019-07-01 15:21:25',
                'is_index' => 0,
                'introduction' => '“文化遗产对于博物馆来说，不是死气沉沉、冰冷的器物；而是鲜活而充满生命力的，并与今天复杂世界中努力生存的人们在认同感和精神上紧紧相连。”

——理查德·库林，《国际博协通讯》',
            ),
            32 => 
            array (
                'id' => 50,
                'column_id' => 18,
                'title' => '锦屏文书特藏馆',
                'subtitle' => NULL,
                'view_number' => 4,
                'release_date' => '2019-06-24 17:36:27',
                'link' => NULL,
                'content' => '<p class="MsoNormal" align="center" style="text-align: left; line-height: 150%;"><span style="font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif;">&nbsp; &nbsp;&nbsp;</span><span style="font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif;">&nbsp; &nbsp;&nbsp;</span><font face="宋体" style="font-size: 10.5pt; text-align: justify; text-indent: 24pt;">锦屏位于贵州省东部，靠黔面楚，县境内有贵州第二大河流清水江流域</font><span style="font-size: 10.5pt; text-align: justify; text-indent: 24pt;">78</span><font face="宋体" style="font-size: 10.5pt; text-align: justify; text-indent: 24pt;">公里。县名始于清代，因原治地铜鼓，四周青山如屏，秀丽似锦而得名。</font></p><p class="MsoNormal" align="center" style="text-align: center; line-height: 150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561368940_l5Rkk1a1Cm.jpg" style="max-width:100%;"><font face="宋体" style="font-size: 10.5pt; text-align: justify; text-indent: 24pt;"><br></font></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">江水流经锦屏之处河面宽敞，排筏舟船十分便利，加之森林资源丰富，锦屏一度成为重要枢纽和木材贸易码头，朝廷在锦屏开设</font>“木市”，广征“皇木”，“民木商”也大量涌入。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">乾隆时期，木材贸易空前繁荣，成为强大的支柱产业，产生了大量的山林植造、佃山造林、山林管护的林契文书、账簿、诉讼词、信函等原始记载，统称为锦屏文书。它成为了我国乃至世界保存较为完整、系统、集中的重要历史文献和珍贵民间档案，锦屏也创造了悠久独特的木商文化。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="text-align: center; text-indent: 24pt; line-height: 150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561368957_HUiYWvxXGX.jpg" style="max-width:100%;"><font face="宋体"><br></font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">2010<font face="宋体">年起，总投资</font><font face="Calibri">1782</font><font face="宋体">万元的锦屏文书楼在县城清水江和小江交汇处动工修建，它高</font><font face="Calibri">49. 4</font><font face="宋体">米，总建筑面积达</font><font face="Calibri">6874</font><font face="宋体">平方米，外观为仿侗族鼓楼风格。文书楼共</font><font face="Calibri">11</font><font face="宋体">层，由锦屏文书特藏馆、清水江历史文化博物馆和观光阁</font><font face="Calibri">3</font><font face="宋体">部分组成，其中锦屏文书特藏馆展陈耗资近</font><font face="Calibri">600</font><font face="宋体">万，以</font><font face="Calibri">4</font><font face="宋体">个部分组成，含近</font><font face="Calibri">50</font><font face="宋体">个文字图片展板、</font><font face="Calibri">3</font><font face="宋体">个视频播放中心、</font><font face="Calibri">3</font><font face="宋体">个立体空间成像处理系统和</font><font face="Calibri">1</font><font face="宋体">处时空幻影成像室，并于</font><font face="Calibri">2015</font><font face="宋体">年</font><font face="Calibri">8</font><font face="宋体">月建成投入使用。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">特藏馆的建设，集保存、展示、研究功能为一体，同时对提高锦屏知名度、促进旅游业发展和提升旅游品味有着重大意义。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="text-align: center; text-indent: 24pt; line-height: 150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561368971_7YJrm6w8dc.jpg" style="max-width:100%;"><font face="宋体"><br></font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">宽谷文化（原贵州彼岸文化公司主创团队）作为锦屏文书特藏馆策划设计施工一体化建设方，通过巧思以</font>“锦屏文书”作为藏头字策划设计三个主题展区，将锦屏的历史变迁至锦屏文书的发展历程等完整呈现出来，希望通过锦屏文书特藏馆的展示，生动描绘与还原锦屏社会文化生态的历史图景，见证锦屏世代相传的文化理念与人文精神。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">文书特藏馆共分为三个主题展区：</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">锦绣河山</font>·清江水韵 （<font face="Calibri">A</font><font face="宋体">厅）</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">屏风九叠</font>·杉木之乡（<font face="Calibri">B</font><font face="宋体">厅）</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">文兴武匿</font>·商契民约（<font face="Calibri">C</font><font face="宋体">厅</font><font face="Calibri">1</font><font face="宋体">）</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">书影家藏</font>·弘诚扬信（<font face="Calibri">C</font><font face="宋体">厅</font><font face="Calibri">2</font><font face="宋体">）</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">A<font face="宋体">厅 锦绣河山·清江水韵</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">此厅主要介绍锦屏地理环境，从春秋战国至今的历史变迁、县城建制沿革、明清王朝的疆域拓展等。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">B<font face="宋体">厅 屏风九叠·杉木之乡</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">本厅主要介绍和展示锦屏文书产生的自然资源、政治、文化、军事等历史背景，生动讲述白岩塘古战场、林宽起义等历史故事，展示白岩塘古战场、隆里古城、铜鼓卫城等古代军事重地，凸显锦屏历史文化地位；通过对锦屏林业资源、林业生产、林业贸易和林业文化的展示，展现锦屏作为清水江木商文化发祥地的历史必然性。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">C<font face="宋体">厅 文兴武匿·商契民约</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">以时间为线索展示了锦屏文书的前生今世、历史轨迹、形式与内容，木商文化与锦屏文书的相互关系，重点通过木材时代的历史重现，展示木行与木业的重要特征，再现木材采运和清水江林业发展史缩影；同时专辟红色文化展示墙，重现当年红六军团、红九军团、红一军团与中央红军过锦屏的重要史实等。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">C<font face="宋体">厅 书影家藏·弘诚扬信</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">重点介绍了清水江流域因杉木而起的民俗和故事；锦屏文书的抢救、保护、研究和传播，及其价值、特征与社会各界对锦屏文书的关注与反响，尤其是学术界的权威人物的评价。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">通过人物、事件场景复原、文物古迹图片资料、老照片及历史文献资料展示、内三江和外三江的历史记忆及对文斗、平秋、瑶白、亮司等苗侗民族村寨的探访展示，点面结合，展现了</font>“锦屏文书”魅力及价值。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">宽谷文化通过对锦屏文书特藏馆的策划施工，在讲述我国西南少数民族地区林业史的同时，更透射了锦屏文书的契约精神与诚信文化，它闪耀着西南少数民族的人性光辉，随清水江数百年流淌不息。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">看完我们的展馆是不是对锦屏文书有了更多的了解？</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">下一次又会带各位去看我们的哪一个展馆呢？如果你也喜欢我们，请继续关注我们宽谷文化哦</font>~<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p>&nbsp;</o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p>&nbsp;</o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p>&nbsp;</o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p><!--[if gte mso 9]><xml><w:LatentStyles DefLockedState="false"  DefUnhideWhenUsed="true"  DefSemiHidden="true"  DefQFormat="false"  DefPriority="99"  LatentStyleCount="260" >
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footer" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="caption" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of figures" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope return" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="line number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="page number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of authorities" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="macro" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toa heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Title" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Closing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Default Paragraph Font" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Message Header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Subtitle" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Salutation" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Date" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Note Heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Block Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Hyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="FollowedHyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Strong" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Emphasis" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Document Map" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Plain Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="E-mail Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal (Web)" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Acronym" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Cite" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Code" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Definition" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Keyboard" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Preformatted" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Sample" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Typewriter" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Variable" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Table" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation subject" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / a / i" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / 1.1 / 1.1.1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Article / Section" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Contemporary" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Elegant" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Professional" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Balloon Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Theme" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Placeholder Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No Spacing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Paragraph" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Intense Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 6" ></w:LsdException>
</w:LatentStyles></xml><![endif]--><style>
@font-face{
font-family:"Times New Roman";
}

@font-face{
font-family:"宋体";
}

@font-face{
font-family:"Calibri";
}

p.MsoNormal{
mso-style-name:正文;
mso-style-parent:"";
margin:0pt;
margin-bottom:.0001pt;
mso-pagination:none;
text-align:justify;
text-justify:inter-ideograph;
font-family:Calibri;
mso-fareast-font-family:宋体;
mso-bidi-font-family:\'Times New Roman\';
font-size:10.5000pt;
mso-font-kerning:1.0000pt;
}

span.msoIns{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:underline;
text-underline:single;
color:blue;
}

span.msoDel{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:line-through;
color:red;
}
@page{mso-page-border-surround-header:no;
mso-page-border-surround-footer:no;}@page Section0{
margin-top:72.0000pt;
margin-bottom:72.0000pt;
margin-left:90.0000pt;
margin-right:90.0000pt;
size:595.3000pt 841.9000pt;
layout-grid:15.6000pt;
}
div.Section0{page:Section0;}</style></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p>&nbsp;</o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p>',
                'created_at' => '2019-06-24 17:36:27',
                'updated_at' => '2019-07-01 01:14:28',
                'is_index' => 0,
                'introduction' => '锦屏位于贵州省东部，靠黔面楚，县境内有贵州第二大河流清水江流域78公里。县名始于清代，因原治地铜鼓，四周青山如屏，秀丽似锦而得名。',
            ),
            33 => 
            array (
                'id' => 51,
                'column_id' => 18,
                'title' => '黔东南“诗•悟” 阳明书院',
                'subtitle' => NULL,
                'view_number' => 5,
                'release_date' => '2019-06-24 17:43:34',
                'link' => NULL,
                'content' => '<p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">你知道王阳明吗？</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">王阳明，名守仁（</font>1472<font face="宋体">年</font><font face="Calibri">10</font><font face="宋体">月</font><font face="Calibri">31</font><font face="宋体">日—</font><font face="Calibri">1529</font><font face="宋体">年</font><font face="Calibri">1</font><font face="宋体">月</font><font face="Calibri">9</font><font face="宋体">日），字伯安，别号阳明。浙江余姚人，因曾隐居于会稽山阳明洞，自号阳明子，学者称之为阳明先生。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">正德元年（</font>1506<font face="宋体">年），王阳明受奸人所害，被贬谪到贵州龙场驿做驿丞。王阳明在龙场潜心修习，继而大悟，由此创建心学，提出“知行合一”和“致良知”思想，奠定了其在中国哲学史、思想史上的历史地位。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">王阳明在悟道后，在贵州传播阳明心学，三年间门人广布黔中。后在贵州阳明后学的努力下，经过多年经营，最终形成黔中王门，出现了</font>“贵州王学三先生”，其中则以阳明再传之卓越弟子孙应鳌为黔中王学集大成者。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">孙应鳌，贵州清平卫人，名儒大臣，一代帝师，晚年称病回乡在今下司一带设馆讲学，让王学思想深植于下司文化血脉，影响一代又一代下司人。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">王学思想至今仍有重要的现实意义，关于王阳明的各类展馆遍布全国。宽谷文化独辟蹊径，以</font>“诗•悟”为主题，对下司阳明书院进行升级改造，全面展示王阳明人生经历和哲学思想。</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">黔东南州凯里下司</font>“诗·悟”阳明书院</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">王阳明是明代著名的思想家、文学家、哲学家和军事家，也是著名的诗人，他一生赋诗六百余首，其</font>“诗”与“悟”有着不可分割的内在联系。可以说阳明之诗乃生命成长之诗，阳明之悟是境界自由之悟。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">“诗·悟”阳明书院以<b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">「诗」</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">破题，以</font><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">「悟」</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">为设计主线，通过由浅及深的</font><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">“本悟、思悟、契悟、渐悟、大悟、传悟和时悟”七个展陈空间</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">，深入浅出地讲述了阳明生而不凡、立志成圣、龙场悟道等事迹，阳明之悟由初级到高级、由表面到深刻、由量变到质变的复合过程，以及阳明心学在下司和后代的传承理路。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369106_ugm8pbT1a9.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">“诗·悟”阳明书院自开放以来得到了各级领导的广泛关注。<font face="Calibri">2017</font><font face="宋体">年</font><font face="Calibri">7</font><font face="宋体">月</font><font face="Calibri">3</font><font face="宋体">日，时任贵州省委书记、省人大常委会主任陈敏尔，黔东南州委书记黄秋斌等领导对阳明书院进行考察参观。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">宽谷文化通过重新改造，以简约、禅意的空间表达，把书院设计成为人与建筑、人与空间、人与景观、人与思想的对话空间，让它有情感、有温度，让每一位走进阳明书院的人，走近阳明的心学世界，体悟他的精神境界。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">&nbsp;<font face="宋体">以下为部分展陈空间</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">：</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">本悟</font>·天性之悟 传奇童年</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">“本悟”即王阳明天性之悟，指他心性潜存的心学种子。王阳明从小就天姿聪慧，才思敏捷，思想活跃，其十一岁就能诗赋，显露了诗人的才华。<spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369119_2YktueVaL4.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">山近月远觉月小，便道此山大于月；</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">若人有眼大如天，还见山小月更阔。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;——《蔽月山房诗》</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">此诗作于王阳明十一岁时，展现了他的诗性情趣、审美和心性中潜藏的心学种子，是诗人幼年时代爆发出的精神火光。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369136_vVWRtsmR7v.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">这一空间设计，正展现了王阳明《蔽月山房诗》中所展现的哲学意境。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">思悟</font>·少年叛逆 立志成圣</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">“思悟”即王阳明对其人生道路和追求人生价值的思索，是由天性之本悟转向天理（理性）之思考的一次飞跃。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">少年王阳明，独自沿内长城出游，心中慷慨激情油然而生，迸发出经略四方的远大志向。一天夜里，王阳明竟在梦中拜谒汉光武时代的伏波将军马援的庙宇，并写下</font>“卷甲归来马伏波<font face="Calibri">,</font><font face="宋体">早年兵法鬓毛皤。云埋铜柱雷轰折</font><font face="Calibri">,</font><font face="宋体">六字题文尚不磨。”《梦谒伏波将军庙诗》</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p>&nbsp;</o:p></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369149_i7PSriCWFc.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">此厅中三幅画上分别是孔子、孟子和朱子，书桌旁空白的那一幅，暗喻王阳明想要走入圣贤之中的成圣愿望。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">契悟</font>·格物致知 整理理学</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">“契悟”是王阳明心学发展的重要一环，在此阶段，王阳明了解到“圣人必可学而至”的道理。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">立志成圣的王阳明，在完成自己志向的过程中也经历过许多坎坷，由于苦苦探索成圣之道，他写下《双峰》诗，以</font>“凌崖望双峰，苍茫竟何在？”表达了内心的迷茫。也是在此阶段，阳明学习朱熹格物致知，以致“格竹而病”。<spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369211_n88avs8zfU.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">聚沙成塔艺术装置，由许多木条组成，每个上刻有王阳明前历代理学大家的名言，暗合王阳明学习、整理理学，其后未完成的理字，暗指王阳明想通过程朱理学完成自己成圣之愿而不得的现实。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">渐悟</font>·出入释道 儒学为尊<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">儒释道为古代中国最早的世界文化视野范围观，此阶段的王阳明曾在儒、释、道中游离，后逐渐摆脱释、道，以儒学为尊。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">中进士后，王阳明清醒地看到世事难为，产生了</font>“吏而隐”之思。《题四老围棋图》中“却怀刘项当年事<font face="Calibri">,</font><font face="宋体">不及山中一着棋。”就是这个率真之人此时的心照。 </font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">此时王阳明的思想处于飘摇，游离于辞章之学、养生之术和释仙之道中。由于其天性聪敏，学释、道皆有所得，流传下预测未来事，三言两语劝和尚归家等故事。</font><spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p>&nbsp;</o:p></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369222_8JmA9aJrVq.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">此儒、释、道三个大字暗指王阳明曾于儒释道中游离不定，后逐渐从求仙、释道的思想彷徨中解放出来，坚定了以</font>“经世之学”成就圣人之路的过程。</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369236_ARNAX9dBbj.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">根据王阳明在此人生阶段的几个经典故事改编创作的视频故事。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-weight:bold;="" font-style:normal;font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">大悟</font>·龙场悟道 知行合一</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-weight:bold;="" font-style:normal;font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">龙场</font>“大悟”，是王阳明思想飞升和境界自由的高峰，由此他创建了心学，提出了“知行合一”和“致良知”的思想，奠定了其在中国哲学史、思想史上的历史地位。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">此厅详细讲述了王阳明在贵州境内的经历、思想转变和心学理论体系的建立完善的过程。《龙岗漫兴》组诗记录了他在贵州期间的见闻和心态。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-align:center;
line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369249_cd2dVq82z0.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">此为阳明悟道时所在的龙场阳明洞场景还原。王阳明曾言，</font>““天地虽大<font face="Calibri">,</font><font face="宋体">但有一念向善</font><font face="Calibri">,</font><font face="宋体">心存良知</font><font face="Calibri">,</font><font face="宋体">虽凡夫俗子</font><font face="Calibri">,</font><font face="宋体">皆可成圣。”设计此场景的初衷便来源于此，希望每个到此的参观者都能感受自己心中的神圣。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-weight:bold;="" font-style:normal;font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">传悟</font>·求仁为宗 下司文脉</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">孙应鳌，清平卫人（今凯里），王阳明学派的卓越再传弟子（徐樾为大弟子），黔中王学集大成者。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">晚年称病回乡，设馆讲学，培养了众多家乡弟子，使得凯里成为贵州王学重镇。其传承自王阳明心学体系的</font>“求仁”“无欲”等思想也成为了包含下司在内的地方文化精神的根源与根脉。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">下司之地，因王学的传播，将</font>“知行合一”的种子深植于文化血脉，影响一代又一代下司人，让下司报效家国的志士先贤层出不穷。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369266_toURtsNz8I.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">此展厅悬挂着孙应鳌传道受业解惑图，蕴含着下司人立志将</font>“阳明精神”世代传承的美好愿景。</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-weight:bold;="" font-style:normal;font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">中庭</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-weight:bold;="" font-style:normal;font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369296_HGltf0J0sE.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369304_JbH49EOYLb.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369312_aWNqthRwAo.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369320_S9OvB9YBll.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">中庭大量使用留白等中式造景方式，营造富有韵味的禅意空间。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></i></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369346_TUZUDfbbwX.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369353_NVQpHgG9Wn.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">书室与画室相互映衬、相互呼应。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></i></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369377_K5ymUJOE8x.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">书院过厅以后世名人学者对王阳明的评述为主要内容。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369384_BpPVKKrATu.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:left;line-height:150%;"><i><spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">参观者津津有味地观看展厅内容。</font></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></i><i><spanyes\';font-family:calibri;mso-fareast-font-family:宋体; mso-bidi-font-family:\'times="" new="" roman\';font-style:italic;font-size:10.5000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:calibri;mso-fareast-font-family:宋体;></i></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369392_SlKJcodXMe.jpg" style="max-width:100%;"><br></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-weight:normal;="" font-style:italic;font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">石狮篆刻的</font>“天人合一 知行合一”正是贵州对阳明心学总结发展而成的贵州人文精神。</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-weight:normal;="" font-style:italic;font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p>&nbsp;</o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">王阳明一生波澜壮阔，磊落光明，他的思想和学说有着重要的现实意义。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p>&nbsp;</o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">看完我们的展馆，如果你对王阳明其人其事或思想、学说产生了兴趣，那我们的使命就完成了。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p><!--[if gte mso 9]><xml><w:LatentStyles DefLockedState="false"  DefUnhideWhenUsed="true"  DefSemiHidden="true"  DefQFormat="false"  DefPriority="99"  LatentStyleCount="260" >
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footer" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="caption" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of figures" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope return" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="line number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="page number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of authorities" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="macro" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toa heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Title" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Closing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Default Paragraph Font" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Message Header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Subtitle" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Salutation" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Date" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Note Heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Block Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Hyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="FollowedHyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Strong" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Emphasis" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Document Map" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Plain Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="E-mail Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal (Web)" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Acronym" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Cite" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Code" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Definition" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Keyboard" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Preformatted" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Sample" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Typewriter" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Variable" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Table" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation subject" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / a / i" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / 1.1 / 1.1.1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Article / Section" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Contemporary" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Elegant" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Professional" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Balloon Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Theme" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Placeholder Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No Spacing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Paragraph" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Intense Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 6" ></w:LsdException>
</w:LatentStyles></xml><![endif]--><style>
@font-face{
font-family:"Times New Roman";
}

@font-face{
font-family:"宋体";
}

@font-face{
font-family:"Calibri";
}

p.MsoNormal{
mso-style-name:正文;
mso-style-parent:"";
margin:0pt;
margin-bottom:.0001pt;
mso-pagination:none;
text-align:justify;
text-justify:inter-ideograph;
font-family:Calibri;
mso-fareast-font-family:宋体;
mso-bidi-font-family:\'Times New Roman\';
font-size:10.5000pt;
mso-font-kerning:1.0000pt;
}

span.msoIns{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:underline;
text-underline:single;
color:blue;
}

span.msoDel{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:line-through;
color:red;
}
@page{mso-page-border-surround-header:no;
mso-page-border-surround-footer:no;}@page Section0{
}
div.Section0{page:Section0;}</style></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:21.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">下一次又会带各位去看我们的哪一个展馆呢？请现在开始期待吧</font>~<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';font-style:normal;="" font-size:10.5000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p>',
                'created_at' => '2019-06-24 17:43:34',
                'updated_at' => '2019-07-08 13:05:43',
                'is_index' => 0,
                'introduction' => '王阳明，名守仁（1472年10月31日—1529年1月9日），字伯安，别号阳明。浙江余姚人，因曾隐居于会稽山阳明洞，自号阳明子，学者称之为阳明先生。

正德元年（1506年），王阳明受奸人所害，被贬谪到贵州龙场驿做驿丞。王阳明在龙场潜心修习，继而大悟，由此创建心学，提出“知行合一”和“致良知”思想，奠定了其在中国哲学史、思想史上的历史地位。

王阳明在悟道后，在贵州传播阳明心学，三年间门人广布黔中。后在贵州阳明后学的努力下，经过多年经营，最终形成黔中王门，出现了“贵州王学三先生”，其中则以阳明再传之卓越弟子孙应鳌为黔中王学集大成者。

孙应鳌，贵州清平卫人，名儒大臣，一代帝师，晚年称病回乡在今下司一带设馆讲学，让王学思想深植于下司文化血脉，影响一代又一代下司人。',
            ),
            34 => 
            array (
                'id' => 52,
                'column_id' => 18,
                'title' => '贵州省图书馆历史陈列馆',
                'subtitle' => NULL,
                'view_number' => 1,
                'release_date' => '2019-06-24 17:45:28',
                'link' => NULL,
                'content' => '<p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">据史料记载：</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">1907<font face="宋体">年</font><font face="Calibri">7</font><font face="宋体">月，我省最早的省级公共图书馆机构成立。</font><font face="Calibri">1937</font><font face="宋体">年</font><font face="Calibri">5</font><font face="宋体">月，贵州省图书馆前身，贵州省立图书馆正式成立并开馆。</font><font face="Calibri">80</font><font face="宋体">年栉风沐雨，</font><font face="Calibri">80</font><font face="宋体">年薪火相传。如今，贵州省图书馆的历史历程和动人精神在陈列馆内得以呈现，将伴随书香浸润贵州，开启贵州更璀璨的新时代。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">馆藏万卷益君智，史证千年清吾心。</font>2017<font face="宋体">年</font><font face="Calibri">12</font><font face="宋体">月</font><font face="Calibri">21</font><font face="宋体">日，备受瞩目的贵州省图书馆历史陈列馆正式开幕。本陈列馆由贵州宽谷文化发展有限公司策划、设计、施工完成。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">本馆通过整合贵州省图书馆现存资料，收集散落的历史故事和物件，经过精心策划和设计，从陈矩创办贵州图书馆于梦草公园开始，到民国时期的停办、重建，抗日时期的停馆、复开，十年大动乱时期的停顿、复馆，改革开放后的大发展，展示贵州省图书馆八十年来砥砺前行的发展历程。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">珍贵的旧照片、简洁的文字、古色古香的图书馆珍藏</font>……共同生动地描绘出贵州省图书馆的历史脉络，展现了图书馆人对文化传承与传播使命的坚守，展示了贵州省图书馆的发展与蜕变。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">本馆通过大事记、岁月如歌、协作引领、春华秋实、众擎易举五个展区内容，紧紧围绕</font>“薪火相传，书香致远”主题，将贵州省图书馆发展史上的各个阶段详实、有趣地展现出来。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">大事记</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">以时间为轴，挑选贵州省图书馆历史上一个个重要的大事件，按照时间顺序递进呈现。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">岁月如歌</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">循着时间的轨迹，在讲述贵州省图书馆历史渊源和沿革的同时，插入业务、服务等内容，清楚的引出贵州省图书馆的发展脉络，使观展者能快速了解贵州省图书馆历史，并留下深刻的印象。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">协作引领</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">展区主要展现贵州省图书馆学会、贵州数字图书馆、文化信息资源共享工程、古籍保护等内容，以此展现贵州省图书馆和省图书馆学会在全省图书馆界的业务引领和协作协调作用。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">春华秋实</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">展区主要展示了图书馆人在文化传承、文化保护和文化创新的道路上所取得的成果。以此弘扬先辈们为贵州省文化事业无私奉献的精神，彰显后辈们继往开来的魄力。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">众擎易举</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">展区共分为领导关怀、读者活动、各界捐赠和读者来信四个部分，图文并茂地展示了社会各界对贵州省图书馆的关怀、关注，及贵州省图书馆对社会、读者的回馈。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">结语</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">陈列馆中的每一段文字都透着历史温度，每一件珍藏都讲述着曾经的故事。一张灰白的照片、一部陈旧的史书、一封历久弥新的书信、一篇珍贵的报道</font>……历史的记忆通过它们鲜活起来。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p>&nbsp;</o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p><!--[if gte mso 9]><xml><w:LatentStyles DefLockedState="false"  DefUnhideWhenUsed="true"  DefSemiHidden="true"  DefQFormat="false"  DefPriority="99"  LatentStyleCount="260" >
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footer" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="caption" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of figures" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope return" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="line number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="page number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of authorities" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="macro" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toa heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Title" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Closing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Default Paragraph Font" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Message Header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Subtitle" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Salutation" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Date" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Note Heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Block Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Hyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="FollowedHyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Strong" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Emphasis" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Document Map" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Plain Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="E-mail Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal (Web)" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Acronym" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Cite" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Code" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Definition" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Keyboard" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Preformatted" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Sample" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Typewriter" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Variable" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Table" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation subject" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / a / i" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / 1.1 / 1.1.1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Article / Section" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Contemporary" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Elegant" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Professional" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Balloon Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Theme" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Placeholder Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No Spacing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Paragraph" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Intense Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 6" ></w:LsdException>
</w:LatentStyles></xml><![endif]--><style>
@font-face{
font-family:"Times New Roman";
}

@font-face{
font-family:"宋体";
}

@font-face{
font-family:"Calibri";
}

p.MsoNormal{
mso-style-name:正文;
mso-style-parent:"";
margin:0pt;
margin-bottom:.0001pt;
mso-pagination:none;
text-align:justify;
text-justify:inter-ideograph;
font-family:Calibri;
mso-fareast-font-family:宋体;
mso-bidi-font-family:\'Times New Roman\';
font-size:10.5000pt;
mso-font-kerning:1.0000pt;
}

span.msoIns{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:underline;
text-underline:single;
color:blue;
}

span.msoDel{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:line-through;
color:red;
}
@page{mso-page-border-surround-header:no;
mso-page-border-surround-footer:no;}@page Section0{
}
div.Section0{page:Section0;}</style></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p>&nbsp;</o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p>',
                'created_at' => '2019-06-24 17:45:28',
                'updated_at' => '2019-07-07 09:09:38',
                'is_index' => 0,
                'introduction' => NULL,
            ),
            35 => 
            array (
                'id' => 53,
                'column_id' => 18,
                'title' => '大动作，贵州师范大学博物馆来啦！',
                'subtitle' => NULL,
                'view_number' => 2,
                'release_date' => '2019-06-24 17:46:47',
                'link' => NULL,
                'content' => '<p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">近日，贵州师范大学博物馆启动建设。贵州师范大学博物馆位于贵安新区花溪大学城，规模约</font>5500<font face="宋体">平方米，建成后将有节奏、有层次地展示贵州地质变迁、多彩的民族文化、丰富的自然资源以及贵州师范大学的学术研究及丰硕成果。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">悄悄告诉你，其实，贵州师范大学对此博物馆的建设早有</font>“预谋”。早在今年上半年，贵州师范大学就积极组建省内专家团队，并联动各学院师生共同展开建馆筹备工作。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="">10<font face="宋体">月，在全校领导和师生的群策群力下，贵州师范大学博物馆进入招标阶段。这个时候迫切需要找到一家实力雄厚、专业性强、经验丰富的公司来承担此博物馆的策划和设计工程。这家公司必须具备省内一流的博物馆策划设计水平，有丰富的博物馆建设经验……</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">在激烈的竞争中，贵州宽谷文化发展有限公司通过了专家团队的层层筛选，一举中标。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-style:italic;="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">牵手成功！撒花！</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-style:italic;="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">宽谷文化将通过独具匠心的展陈策划、专业的展陈布置和丰富的展陈经验，将贵州师范大学博物馆打造成一个有生命、有变化、有情感的展陈空间，讲述沧海桑田的地质变迁，人类起源的故土乡愁和贵州这片土地的神奇、神性和生活在这片土地上的族群及他们的文化、艺术、生活、信仰。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">贵州宽谷文化发展有限公司是策划公司？设计公司？</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">都不是，贵州宽谷文化发展有限公司是文旅策划设计施工一体化综合服务商。集文博展陈、活动会展、新闻传播、品牌服务于一体，讲求独特精神、文化内涵和时代气息，致力于打造贵州首家最具专业化水平、最富生命力创意的商业空间、文博展陈一体化执行公司。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><font face="宋体">这家公司，这支队伍，他们对品质执着，对每一个细小环节一丝不苟，对专业要求</font>“苛刻”，对客户态度严谨。客户对他们总是竖起大拇指，就是一个赞。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">这些年，他们完成了一个又一个客户满意、自身骄傲的项目</font>……</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-align:center;
line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">贵阳市白云区</font>“蓬莱仙界”农耕文化博物馆<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-align:center;
line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">东方科技谷</font>2015<font face="宋体">国际数博会科技展示馆</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-align:center;
line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">贵州省社会主义核心价值观主题公园</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-align:center;
line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">黔东南下司古镇</font>“忆·象”活态展示馆<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-align:center;
line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">黔东南凯里</font>“诗·悟”阳明书院<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-align:center;
line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">凯里苗侗医药博物馆</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-align:center;
line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">……<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-align:center;
line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">强强联手，共铸精品。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p><!--[if gte mso 9]><xml><w:LatentStyles DefLockedState="false"  DefUnhideWhenUsed="true"  DefSemiHidden="true"  DefQFormat="false"  DefPriority="99"  LatentStyleCount="260" >
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footer" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="caption" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of figures" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope return" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="line number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="page number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of authorities" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="macro" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toa heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Title" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Closing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Default Paragraph Font" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Message Header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Subtitle" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Salutation" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Date" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Note Heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Block Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Hyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="FollowedHyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Strong" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Emphasis" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Document Map" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Plain Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="E-mail Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal (Web)" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Acronym" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Cite" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Code" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Definition" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Keyboard" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Preformatted" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Sample" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Typewriter" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Variable" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Table" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation subject" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / a / i" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / 1.1 / 1.1.1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Article / Section" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Contemporary" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Elegant" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Professional" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Balloon Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Theme" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Placeholder Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No Spacing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Paragraph" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Intense Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 6" ></w:LsdException>
</w:LatentStyles></xml><![endif]--><style>
@font-face{
font-family:"Times New Roman";
}

@font-face{
font-family:"宋体";
}

@font-face{
font-family:"Calibri";
}

p.MsoNormal{
mso-style-name:正文;
mso-style-parent:"";
margin:0pt;
margin-bottom:.0001pt;
mso-pagination:none;
text-align:justify;
text-justify:inter-ideograph;
font-family:Calibri;
mso-fareast-font-family:宋体;
mso-bidi-font-family:\'Times New Roman\';
font-size:10.5000pt;
mso-font-kerning:1.0000pt;
}

span.msoIns{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:underline;
text-underline:single;
color:blue;
}

span.msoDel{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:line-through;
color:red;
}
@page{mso-page-border-surround-header:no;
mso-page-border-surround-footer:no;}@page Section0{
}
div.Section0{page:Section0;}</style></p><p class="MsoNormal" align="center" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-align:center;
line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体">博物馆建设</font>ing<font face="宋体">，小编已经搓手期待啦……</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p>',
                'created_at' => '2019-06-24 17:46:47',
                'updated_at' => '2019-06-30 18:20:59',
                'is_index' => 0,
                'introduction' => NULL,
            ),
            36 => 
            array (
                'id' => 54,
                'column_id' => 18,
                'title' => '贵阳市云岩区红色文化展馆综合布展项目正式开工建设',
                'subtitle' => NULL,
                'view_number' => 2,
                'release_date' => '2019-06-24 17:51:16',
                'link' => NULL,
                'content' => '<p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"="">2019<font face="宋体">年</font><font face="Calibri">1</font><font face="宋体">月</font><font face="Calibri">29</font><font face="宋体">日上午，贵阳市云岩区红色文化展馆综合布展项目正式开工建设，云岩区政府副区长张缨及区档案局相关负责人现场听取项目汇报并进行指导。</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="text-align: center; text-indent: 24.1pt; line-height: 150%;"><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369840_ZE5z2VenBh.jpg" style="max-width:100%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" new="" roman\';line-height:150%;="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;"=""><font face="宋体"><br></font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:25.6000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><font face="微软雅黑">云岩区是贵阳市主城区之一，自明朝贵州建省以来一直是省政府所在地，是全省重要的政治、经济、金融、文化、信息、科技、教育、商贸中心。历史上长久地居于中心位置的云岩区，有着深厚的文化根脉，丰富的红色故事和完整的精神传承脉络。云岩独特的历史文化地位，红色文化资源和时代发展面貌使其成为新时代贵州精神的集中地，具有典型性。</font><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><o:p></o:p></spanyes\';font-family:微软雅黑;line-height:150%;></spanyes\';font-family:微软雅黑;line-height:150%;></p><p class="MsoNormal" style="text-align: center; text-indent: 25.6pt; line-height: 150%;"><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><img src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561369856_zRMWXPNaPN.png" style="max-width:100%;"><font face="微软雅黑"><br></font></spanyes\';font-family:微软雅黑;line-height:150%;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:25.6000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><font face="微软雅黑">为集中展现和弘扬云岩区地域文化、红色文化以及贵州精神，激励贵阳人民、贵州儿女振奋精神，助力贵州经济社会发展，云岩区上下齐心聚力，规划建设云岩区红色历史文化陈列馆。经过层层严格地筛选，最终选定贵州宽谷文化发展有限公司承担该陈列馆的建设工作。</font><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><o:p></o:p></spanyes\';font-family:微软雅黑;line-height:150%;></spanyes\';font-family:微软雅黑;line-height:150%;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:25.6000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><font face="微软雅黑">该馆以</font><b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:bold;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"="">“筑 魂”</spanyes\';font-family:微软雅黑;line-height:150%;></b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><font face="微软雅黑">为主题，分为四个部分</font><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><o:p></o:p></spanyes\';font-family:微软雅黑;line-height:150%;></spanyes\';font-family:微软雅黑;line-height:150%;></spanyes\';font-family:微软雅黑;line-height:150%;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:25.6000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:bold;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><font face="微软雅黑">红之渊</font>·贵中文脉 （城市历史文化的起承） </spanyes\';font-family:微软雅黑;line-height:150%;></b><b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:bold;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><o:p></o:p></spanyes\';font-family:微软雅黑;line-height:150%;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:25.6000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:bold;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><font face="微软雅黑">红之源</font>·烽火岁月（街巷城垣留下的印迹） </spanyes\';font-family:微软雅黑;line-height:150%;></b><b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:bold;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><o:p></o:p></spanyes\';font-family:微软雅黑;line-height:150%;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:25.6000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:bold;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><font face="微软雅黑">红之灵</font>·英雄传奇（革命志士铸就的风采） </spanyes\';font-family:微软雅黑;line-height:150%;></b><b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:bold;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><o:p></o:p></spanyes\';font-family:微软雅黑;line-height:150%;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:25.6000pt;
mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:bold;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><font face="微软雅黑">红之魂</font>·时代新章（党的建设引领的发展）</spanyes\';font-family:微软雅黑;line-height:150%;></b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"="">&nbsp;<spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><o:p></o:p></spanyes\';font-family:微软雅黑;line-height:150%;></spanyes\';font-family:微软雅黑;line-height:150%;></p><p><!--[if gte mso 9]><xml><w:LatentStyles DefLockedState="false"  DefUnhideWhenUsed="true"  DefSemiHidden="true"  DefQFormat="false"  DefPriority="99"  LatentStyleCount="260" >
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footer" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="caption" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of figures" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope return" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="line number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="page number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of authorities" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="macro" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toa heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Title" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Closing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Default Paragraph Font" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Message Header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Subtitle" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Salutation" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Date" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Note Heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Block Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Hyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="FollowedHyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Strong" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Emphasis" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Document Map" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Plain Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="E-mail Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal (Web)" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Acronym" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Cite" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Code" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Definition" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Keyboard" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Preformatted" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Sample" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Typewriter" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Variable" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Table" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation subject" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / a / i" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / 1.1 / 1.1.1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Article / Section" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Contemporary" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Elegant" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Professional" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Balloon Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Theme" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Placeholder Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No Spacing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Paragraph" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Intense Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 6" ></w:LsdException>
</w:LatentStyles></xml><![endif]--><style>
@font-face{
font-family:"Times New Roman";
}

@font-face{
font-family:"宋体";
}

@font-face{
font-family:"Calibri";
}

@font-face{
font-family:"微软雅黑";
}

p.MsoNormal{
mso-style-name:正文;
mso-style-parent:"";
margin:0pt;
margin-bottom:.0001pt;
mso-pagination:none;
text-align:justify;
text-justify:inter-ideograph;
font-family:Calibri;
mso-fareast-font-family:宋体;
mso-bidi-font-family:\'Times New Roman\';
font-size:10.5000pt;
mso-font-kerning:1.0000pt;
}

span.msoIns{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:underline;
text-underline:single;
color:blue;
}

span.msoDel{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:line-through;
color:red;
}
@page{mso-page-border-surround-header:no;
mso-page-border-surround-footer:no;}@page Section0{
}
div.Section0{page:Section0;}</style></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:25.6000pt;
mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><font face="微软雅黑">围绕</font><b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:bold;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"="">“以红筑魂·以文润魂”</spanyes\';font-family:微软雅黑;line-height:150%;></b><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><font face="微软雅黑">的核心理念，以不同层次的故事讲述和灵活多样的展陈手段，展示云岩的历史之美、国家之情、文化之风以及贵州精神。打造一个集艺术性、文化性、历史性为一体的展陈文化艺术空间，一个连接现代与历史传承的平台，一个贵州新时代精神浓缩展示平台。使每一个走进云岩区红色历史文化陈列馆的人对云岩历史、文化和精神有新的认识和了解，潜移默化影响观者。</font><spanyes\';font-family:微软雅黑;line-height:150%; color:rgb(51,51,51);letter-spacing:0.4000pt;font-weight:normal;="" text-transform:none;font-style:normal;font-size:12.0000pt;="" mso-font-kerning:1.0000pt;background:rgb(255,255,255);mso-shading:rgb(255,255,255);"=""><o:p></o:p></spanyes\';font-family:微软雅黑;line-height:150%;></spanyes\';font-family:微软雅黑;line-height:150%;></spanyes\';font-family:微软雅黑;line-height:150%;></p>',
                'created_at' => '2019-06-24 17:51:16',
                'updated_at' => '2019-07-01 08:34:13',
                'is_index' => 0,
                'introduction' => NULL,
            ),
            37 => 
            array (
                'id' => 55,
                'column_id' => 18,
                'title' => '贵州交通博物馆·教育馆∣ 交职人与山地交通的那些事儿',
                'subtitle' => NULL,
                'view_number' => 11,
                'release_date' => '2019-06-24 17:54:44',
                'link' => NULL,
            'content' => '<p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><br></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="">2018<font face="宋体">年</font><font face="Calibri">9</font><font face="宋体">月，贵州交通职业技术学院建院</font><font face="Calibri">60</font><font face="宋体">周年之际，</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;=""><font face="宋体">由贵州日报文创中心统筹执行，贵州宽谷文化发展有限公司策划设计的</font>“贵州交通博物馆·教育馆”正式对外开放。</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><o:p><br></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="text-align: center; text-indent: 24pt; line-height: 150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><img style="max-width:100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561370035_dDFXG9j6tg.png"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;=""><br></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><font face="宋体">该馆展陈面积约</font>2300<font face="宋体">平方米，分为“贵州山地交通馆”“贵州交职院校史馆”两个部分，集展示、体验、教育等功能于一体，蕴含着交通建设、交通教育浓浓的人文气息和科学精神。置身其中，仿佛穿越贵州山地交通</font><font face="Calibri">2000</font><font face="宋体">多年的时空，览尽贵州交职院</font><font face="Calibri">60</font><font face="宋体">年辉煌历程。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;=""><font face="宋体">跟着小编</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;=""><font face="宋体">感受贵州交通文明的魅力吧</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;="">……</spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-style:italic;font-size:12.0000pt;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p class="MsoNormal" style="text-align: center; text-indent: 24.1pt; line-height: 150%;"><img style="max-width:100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561370061_dcs825rwB6.jpg"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;=""><font face="宋体"><br></font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;=""><font face="宋体">交通馆：山地交通变迁史</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><font face="宋体">时间是可以被参观者看见和触摸的。贵州山地交通馆以时间为轴，采用图文展陈、场景复原、沙盘幻象、多媒体技术呈现、互动体验等方式，全方位、立体式展现贵州古代、近现代及当代三个时期交通发展史。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><font face="宋体">在馆中，参观者可以了解到</font>“唐蒙修建夜郎道线路图”“葛镜桥沙盘幻像展示”、<font face="Calibri">1926</font><font face="宋体">年贵州开始修建公路、新中国成立后以及改革开放以来贵州立体交通的进程、贵州高速公路、高速铁路、农村公路及水运“三年大会战”等，从中感受到贵州人在这方山地中艰苦创业的精神，“逢山开路、遇水架桥”的贵州交通精神和振奋人心的贵州精神。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><font face="宋体">贵州大学原副校长张世俊、原贵州新闻出版广电局巡视员杨庆武等专家、学者参观</font>“贵州山地交通馆”后，纷纷表示“震撼”，一致认为：“本项目展陈效果突出，具有较强的吸引力和震撼力！”<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="text-align: center; text-indent: 24pt; line-height: 150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><img style="max-width:100%;" src="http://www.kuanguwj.com/uploads/images/wangEditor/201906/24/1561370077_Lirg9kYKg9.jpg"><br></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;=""><font face="宋体">校史馆：交职院</font>60<font face="宋体">年历程</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b><b><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-size:12.0000pt;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></b></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><font face="宋体">走进贵州交职院校史馆，可以尽览学院</font>60<font face="宋体">年的风雨历程，整体呈现着交职院的风华。设计上，充分考虑到整体空间的局限性，内容展示的传统性和现代科技性；通过互动体验展现学校发展史，将校史陈列变成一个讲故事的过程，突破常规，拒绝通俗，力求有情感与情怀的展示。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><font face="宋体">同时，利用双通道</font>L<font face="宋体">型沙盘投影视频，三维动画和投影融合技术展示新老校区概况；采用时间轴设计，在长长的时间轴展板上印下贵州交通职业技术学院自</font><font face="Calibri">1950</font><font face="宋体">年建校至今的长途跋涉；两台搭载校园虚拟漫游骑行系统的自行车，让人循着投影画面前行，感受不同年代的校园、音乐和照片，耐人追忆。</font><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><font face="宋体">贵州宽谷文化发展有限公司作为立体文化构建者，在贵州交通博物馆</font>·教育馆策划和整体设计时，讲求诚于中而形于外，形神兼备，秀外慧中，用专业的团队和专业的水平，将展馆打造成为一部贵州交通史，以此传承贵州交通精神，品味交职院人的青春与芳华。<spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><b><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-style:italic;=""><font face="宋体">想了解更多资讯，关注我就完事儿了！</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></b><b><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-style:italic;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></b></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><b><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-style:italic;=""><font face="宋体">宽谷文化</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></b><b><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-style:italic;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></b></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.1000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><b><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-style:italic;=""><font face="宋体">立体文化构建者</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></b><b><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:bold;font-style:italic;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></b></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><font face="宋体">博物文化馆场构建</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><font face="宋体">景观环境美学打造</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><font face="宋体">红色文化建设全景</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><font face="宋体">文化校园创意设计</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><font face="宋体">品牌建设全程服务</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><font face="宋体">会展活动策划执行</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p align="center" class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;text-align:center;line-height:150%;"><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><font face="宋体">优质媒介整合传播</font></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i><i><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times="" font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" color:rgb(0,0,0);font-weight:normal;font-style:italic;=""><o:p></o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></i></p><p><!--[if gte mso 9]><xml><w:LatentStyles DefLockedState="false"  DefUnhideWhenUsed="true"  DefSemiHidden="true"  DefQFormat="false"  DefPriority="99"  LatentStyleCount="260" >
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="heading 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toc 9" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footer" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="index heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="caption" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of figures" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="envelope return" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="footnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="line number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="page number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote reference" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="endnote text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="table of authorities" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="macro" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="toa heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Bullet 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Number 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Title" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Closing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Default Paragraph Font" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Continue 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Message Header" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Subtitle" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Salutation" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Date" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text First Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Note Heading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Body Text Indent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Block Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Hyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="FollowedHyperlink" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Strong" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Emphasis" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Document Map" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Plain Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="E-mail Signature" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal (Web)" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Acronym" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Address" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Cite" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Code" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Definition" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Keyboard" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Preformatted" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Sample" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Typewriter" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="HTML Variable" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Normal Table" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="annotation subject" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / a / i" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="1 / 1.1 / 1.1.1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Article / Section" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Simple 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Classic 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Colorful 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Columns 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 7" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table List 8" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table 3D effects 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Contemporary" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Elegant" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Professional" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Subtle 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Web 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Balloon Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Table Theme" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Placeholder Text" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="No Spacing" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="List Paragraph" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Intense Quote" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 1" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 2" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 3" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 4" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 5" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Light Grid Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Shading 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium List 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 1 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 2 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Medium Grid 3 Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Dark List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Shading Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful List Accent 6" ></w:LsdException>
<w:LsdException Locked="false"  Priority="99"  SemiHidden="false"  Name="Colorful Grid Accent 6" ></w:LsdException>
</w:LatentStyles></xml><![endif]--><style>
@font-face{
font-family:"Times New Roman";
}

@font-face{
font-family:"宋体";
}

@font-face{
font-family:"Calibri";
}

p.MsoNormal{
mso-style-name:正文;
mso-style-parent:"";
margin:0pt;
margin-bottom:.0001pt;
mso-pagination:none;
text-align:justify;
text-justify:inter-ideograph;
font-family:Calibri;
mso-fareast-font-family:宋体;
mso-bidi-font-family:\'Times New Roman\';
font-size:10.5000pt;
mso-font-kerning:1.0000pt;
}

span.msoIns{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:underline;
text-underline:single;
color:blue;
}

span.msoDel{
mso-style-type:export-only;
mso-style-name:"";
text-decoration:line-through;
color:red;
}
@page{mso-page-border-surround-header:no;
mso-page-border-surround-footer:no;}@page Section0{
margin-top:72.0000pt;
margin-bottom:72.0000pt;
margin-left:90.0000pt;
margin-right:90.0000pt;
size:595.3000pt 841.9000pt;
layout-grid:15.6000pt;
}
div.Section0{page:Section0;}</style></p><p class="MsoNormal" style="mso-para-margin-top:0.5000gd;mso-para-margin-bottom:0.5000gd;text-indent:24.0000pt;&#10;mso-char-indent-count:2.0000;line-height:150%;"><spanyes\';font-family:宋体;mso-ascii-font-family:calibri; color:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:1.0000pt;"="" roman\';line-height:150%;="" new="" mso-hansi-font-family:calibri;mso-bidi-font-family:\'times=""><o:p>&nbsp;</o:p></spanyes\';font-family:宋体;mso-ascii-font-family:calibri;></p>',
                'created_at' => '2019-06-24 17:54:44',
                'updated_at' => '2019-07-05 12:30:05',
                'is_index' => 1,
                'introduction' => NULL,
            ),
            38 => 
            array (
                'id' => 76,
                'column_id' => 15,
                'title' => '苗洞医药《巫医》',
                'subtitle' => NULL,
                'view_number' => 26,
                'release_date' => '2019-07-04 14:49:25',
                'link' => NULL,
                'content' => '<p style="text-align: center;"><iframe frameborder="0" width="720px" height="500px;" src="https://v.qq.com/txp/iframe/player.html?vid=q0893kcwvvc" allowfullscreen="true"></iframe><br></p><p style="text-align: center;"><br></p>',
                'created_at' => '2019-07-04 14:49:25',
                'updated_at' => '2019-07-09 00:58:35',
                'is_index' => 1,
                'introduction' => NULL,
            ),
            39 => 
            array (
                'id' => 77,
                'column_id' => 15,
                'title' => '涿鹿之战——270度环幕',
                'subtitle' => NULL,
                'view_number' => 11,
                'release_date' => '2019-07-04 15:26:34',
                'link' => NULL,
                'content' => '<p style="text-align: center;"><iframe frameborder="0" width="720px" height="500px" src="https://v.qq.com/txp/iframe/player.html?vid=n0893nmb7b2" allowfullscreen="true"></iframe></p><p style="text-align: center;"><br></p>',
                'created_at' => '2019-07-04 15:26:34',
                'updated_at' => '2019-07-10 13:14:23',
                'is_index' => 1,
                'introduction' => NULL,
            ),
            40 => 
            array (
                'id' => 78,
                'column_id' => 15,
                'title' => '黔东南凯里苗侗医药博物馆-虚实光影主题墙',
                'subtitle' => NULL,
                'view_number' => 3,
                'release_date' => '2019-07-04 15:30:33',
                'link' => NULL,
                'content' => '<p style="text-align: center;"><iframe frameborder="0" width="1280px" height="720px" src="https://v.qq.com/txp/iframe/player.html?vid=z0893bb0jnm" allowfullscreen="true"></iframe></p><p><br></p>',
                'created_at' => '2019-07-04 15:30:33',
                'updated_at' => '2019-07-05 10:41:13',
                'is_index' => 0,
                'introduction' => NULL,
            ),
            41 => 
            array (
                'id' => 79,
                'column_id' => 15,
                'title' => '黔东南下司古镇“忆·象”活态展示馆-沙画',
                'subtitle' => NULL,
                'view_number' => 5,
                'release_date' => '2019-07-04 15:34:34',
                'link' => NULL,
                'content' => '<p style="text-align: center;"><iframe frameborder="0" width="1280px" height="720px" src="https://v.qq.com/txp/iframe/player.html?vid=k0893hwfvdw" allowfullscreen="true"></iframe></p><p style="text-align: center;"><br></p>',
                'created_at' => '2019-07-04 15:34:34',
                'updated_at' => '2019-07-08 15:18:27',
                'is_index' => 1,
                'introduction' => NULL,
            ),
            42 => 
            array (
                'id' => 80,
                'column_id' => 15,
                'title' => '全沉浸式空间——三千苗药，八百单方',
                'subtitle' => NULL,
                'view_number' => 0,
                'release_date' => '2019-07-04 15:52:54',
                'link' => NULL,
                'content' => '<p><iframe frameborder="0" width="1280px" height="780px" src="https://v.qq.com/txp/iframe/player.html?vid=h0893ldm59c" allowfullscreen="true"></iframe></p><p style="text-align: center;"><br></p>',
                'created_at' => '2019-07-04 15:52:54',
                'updated_at' => '2019-07-04 15:52:54',
                'is_index' => 0,
                'introduction' => NULL,
            ),
        ));
        
        
    }
}