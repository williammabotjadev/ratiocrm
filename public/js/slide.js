window.onload = function() {
    var headings = [
        "Manage Customer Engagement",
        "Integrate Social Media",
        "Automated Reporting"
    ]

    var hero_texts = [
        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur vero, tempore suscipit quod dignissimos quasi eos ea ratione architecto ipsam quos numquam doloremque veniam nihil rem provident eveniet explicabo quam in perferendis accusamus debitis. Necessitatibus suscipit reiciendis quisquam itaque! Eum repudiandae eveniet placeat maxime nemo magni similique aliquam molestias facere repellendus laborum numquam facilis laudantium autem optio illum odit, exercitationem vero sequi commodi minus sed ab dolore delectus! Optio quos quas eveniet mollitia dolorem rerum!",
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, eos tempora! Porro ducimus quis magnam quia repellendus, illo praesentium eligendi iure ex, voluptatem fugiat commodi! Facere, culpa reprehenderit. Laudantium ab reiciendis esse alias ullam consectetur, cupiditate neque eius ipsa doloremque aliquid dicta, inventore porro sint? Neque maxime blanditiis laudantium excepturi alias? Veniam, suscipit et. Incidunt itaque, unde possimus soluta reiciendis maiores. Commodi quam minus officia necessitatibus possimus expedita perferendis illo ipsum libero, sed harum. Asperiores.",
        "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit error dolor ipsum, amet, dignissimos doloremque a, incidunt eaque temporibus voluptatibus non minima aliquam cumque cum deserunt! Similique accusamus harum dolores accusantium fugit quidem natus enim beatae cumque minima est neque reprehenderit non, aliquid esse iste animi, amet atque sint id iure quas inventore! A ab eius doloremque obcaecati accusantium hic enim sint ipsam sed nisi commodi exercitationem blanditiis totam libero iusto, quia incidunt, some extra text just to fill the line, doloribus tenetur?"
    ]

    var code =  "&#9677;";

    var heading = document.getElementById("hero-heading");
    var hero_text_area = document.getElementById("main-par");
    var circle_one = document.getElementById("circle-one");

    var num = 0;

    function slideAuto() {

            if(num >= 3) {
                num = 0;
            }

            heading.innerText = headings[num];
            hero_text_area.innerText = hero_texts[num];
            alert(circle_one);
            num++;
    }

    
    setInterval(slideAuto, 3000);
    
    
}