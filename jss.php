<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <style>
        #panel, #topbar{
            padding: 5px;
            text-align: center;
            background-color: yellow;
            border: solid 1px black;
        }
        #panel {
            padding: 80px;
        }

    </style>
</head>
<body>
<h1 style="text-align: center">welcome</h1>
<div id="topbar">view panel</div>
<div id="panel">rthiasdhnakld asdlkjaskldj asldnklasjdklasjd kljadkljalsdj </div>
</body>
</html>

<script type="text/javascript">

$(function () {


    /*
    const ages=[33,12,20,16,5,54,21,44,61,13,15,45,25,64,32];

        const companies = [
            {name: "Company One", category: "Finance", start: 1981, end: 2003},
            {name: "Company Two", category: "Retail", start: 1992, end: 2008},
            {name: "Company Three", category: "Auto", start: 1999, end: 2007},
            {name: "Company Four", category: "Retail", start: 1989, end: 2010},
            {name: "Company Five", category: "Technology", start: 2009, end: 2014},
            {name: "Company Six", category: "Finance", start: 1987, end: 2010},
            {name: "Company Seven", category: "Auto", start: 1986, end: 1996},
            {name: "Company Eight", category: "Technology", start: 2011, end: 2016},
            {name: "Company Nine", category: "Retail", start: 1981, end: 1989}
        ];*/

    /* const retailCompanies=companies.filter((company) => company.category === 'Retail')
     console.log(retailCompanies);*/
    /*
        const eighteen = companies.filter(company => (company.start >=1980 && company.start<1990))
        console.log(eighteen);
    */

    /*    const cname=companies.map(company => company.name);
        console.log(cname);*/

    /*const testmap=companies.map(company => `${company.name} [${company.start}-${company.end} ]`);
    console.log(testmap);
*/

    /*   const sortc=companies.sort((c1,c2) =>  c1.start>c2.start ? 1:-1 );
       console.log(sortc);*/


    /*

    ages.forEach(function (item) {
        console.log("item: " + item);
    })*/


    /*  let candrink=[];
      for (let i=0;i<ages.length;i++){
          if(ages[i] >= 21){
              candrink.push(ages[i]);
          }
      }*/

    /*const candrink=ages.filter(function (age) {
        if(age>=21){
            return true;
        }

    })*/


//    const candrink=ages.filter(age => age>=21);


    // console.log(candrink.sort());


    /*
        const sortages=ages.sort((a,b) => b-a);
        console.log(sortages);*/


    //reduce

    //const agesum=ages.reduce((total,age) => total+age  ,0 );

    //console.log(agesum);

    /*    const totalycompanies= companies.reduce((total,c1) => total +(c1.end -c1.start),0 );
        console.log(totalycompanies);*/

    /*    const combine=ages.map(age => age *2)
                            .filter(age => age >=40)
                          .sort((a,b) =>  a-b)
                        .reduce((total,b) => total+b,0 );


         console.log(combine);*/

    //const files = [ 'foo.txt ', '.bar', '   ', 'baz.foo' ];

    /*   const filepath=[];

       for(let file of files){
           var filename= file.trim();
           if(filename){
               const filepaths = `~foo/paths/${filename}`;
               filepath.push(filepaths);
           }

       }
       console.log(filepath);*/
    /*
        const arr=files.reduce((acc,file) =>{
            var filename=file.trim();
            if(filename){
                const filepaths = `~foo/paths/${filename}`;
                acc.push(filepaths);
            } return acc;
        },[]);
        console.log(arr);*/


    /*
          const filePaths = files.reduce( (acc, file) => {
              const filename=file.trim();
              if(filename){
                  const filepath = `~/cool_path/${filename}`;
                  acc.push(filepath);
              }
               return acc;
              },[]);
    */


    // console.log(filePaths);

    /*

        const filePaths = files
                          .map(file => file.trim())
                           .filter(Boolean)
                    .map(filename => `~/fcool/${filename}`);
        console.log(filePaths);
    */


    /*    let filePaths = [];

        for (let file of files) {
            const fileName = file.trim();
            console.log(fileName);
            if(fileName) {
                const filePath = `~/cool_app/${fileName}`;
                filePaths.push(filePath);
            }
        }
    */


    /*
        const name = 'Zelda';
        const letters = [...name];
        console.log(letters);*/

    /*    const data = [1, 2, 3, 1, 2, 4];

        const values=new Set(data);

        console.log(values);*/
    //  const items = ['item1', 'item2', 'item3'];
    /* const cname=companies.map(company => company.name);
     console.log(cname);*!/*/
    /*   const copyItems = [];
        items.forEach(item => copyItems.push(item));
        console.log(copyItems);*/


    /*  const uo=items.reduce((total,item) => total+item,0);
      console.log(uo);*/

/*    const inventory = [
        {name: 'apples', quantity: 2},
        {name: 'bananas', quantity: 0},
        {name: 'cherries', quantity: 5}
    ];

    const arr=inventory.find( ({name}) => name === 'cherries' );
    console.log(arr);*/
  // const a = arr.map( ar => arr.name);
 //  console.log(a);

$("#topbar").click(function () {

    $("#panel").slideToggle(1000);

})







});

</script>
