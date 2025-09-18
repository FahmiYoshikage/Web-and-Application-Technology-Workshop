<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modul1</title>
    <style>
      /* body {
        font-family: Arial, sans-serif;
        margin: 20px;
        line-height: 1.6;
      } */

      h1.judul {
        color: #333;
        border-bottom: 2px solid #333;
        padding-bottom: 5px;
      }

      /* section,
      article,
      nav,
      aside,
      header,
      footer,
      figure {
        border: 1px solid #ccc;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
        background-color: #f9f9f9;
      }

      nav a {
        margin-right: 15px;
        text-decoration: none;
        color: #007bff;
      }

      nav a:hover {
        text-decoration: underline;
      }

      figure img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
      }

      figcaption {
        text-align: center;
        font-style: italic;
        margin-top: 10px;
        color: #555;
      } */
    </style>
  </head>
  <body>
    <h1 align="center">MODUL 1</h1>
    <h2 align="center">HTML5, PHP5, Dan CSS3</h2>
    <hr size="3" color="black" width="100%" />
    <hr size="3" color="black" width="80%" />
    <hr size="3" color="black" width="60%" />

    <br />
    <br />

    <!-- Percobaan Section -->
    <h1 class="judul">Elemen Section</h1>
    <section>
      <h1>Blockchain</h1>
      <p>
        The blockchain is a distributed ledger with growing lists of records
        (blocks) that are securely linked together via cryptographic
        hashes.Each block contains a cryptographic hash of the
        previous block, a timestamp, and transaction data (generally represented
        as a Merkle tree, where data nodes are represented by leaves). Since
        each block contains information about the previous block, they
        effectively form a chain (compare linked list data structure), with each
        additional block linking to the ones before it. Consequently, blockchain
        transactions are resistant to alteration because, once recorded, the
        data in any given block cannot be changed retroactively without altering
        all subsequent blocks and obtaining network consensus to accept these
        changes.
      </p>
    </section>

    <section>
      <h1>Solidity</h1>
      <p>
        Solidity is a programming language for implementing smart
        contracts on various blockchain platforms, most notably,
        Ethereum. Solidity is licensed under GNU General Public License
        v3.0. Solidity was designed by Gavin Wood
         and developed by Christian Reitwiessner, Alex Beregszaszi, and
        several former Ethereum core contributors. Programs in Solidity run
        on Ethereum Virtual Machine or on compatible virtual machines.
      </p>
    </section>
    <!-- Section END -->

    <br />
    <br />

    <!-- Article -->
    <h1 class="judul">Elemen Article</h1>
    <article>
      <h1>ERC-2335: Secure Key Management for Ethereum</h1>
      <p>
        ERC-2335 is a proposal for a standard interface that allows users to
        encrypt private keys using a password. This standard leverages both
        on-chain and off-chain processes to ensure the security of private keys
        without compromising the decentralized nature of blockchain technology.
      </p>
    </article>
    <!-- Article END -->

    <br />
    <br />

    <!-- Nav -->
    <h1 class="judul">Elemen Nav</h1>
    <nav>
      <a href="../../dashboard/index.html">Xampp</a>
      <a href="../Modul0-1.html">Modul 0.1</a>
      <a href="../Modu0.2/index.html">Modul 0.2</a>
    </nav>
    <!-- Nav END -->

    <br />
    <br />

    <!-- Aside -->
    <h1 class="judul">Elemen Aside</h1>
    <p>My family and I visited The Epcot center this summer</p>
    <aside>
      <h4>Epcot Center</h4>
      <p>The Epcot Center is a theme park in Disney, Florida</p>
    </aside>
    <!-- Aside END -->

    <br />
    <br />

    <!-- Header -->
    <h1 class="judul">Elemen Header</h1>
    <article>
      <header>
        <h1>ERC 20</h1>
        <p><time pubdate datetime="2025-08-21"></time></p>
      </header>
      <p>
        The ERC-20 introduces a standard for Fungible Tokens, in other words,
        they have a property that makes each Token be exactly the same (in type
        and value) as another Token. For example, an ERC-20 Token acts just like
        the ETH, meaning that 1 Token is and will always be equal to all the
        other Tokens.
      </p>
    </article>
    <!-- Header END -->

    <br />
    <br />

    <!-- Footer -->
    <h1 class="judul">Elemen Footer</h1>
    <footer>
      <p>Created by Fahmi Ilham Bagaskara - 2025</p>
      <p><time pubdate datetime="2025-09-09"></time></p>
    </footer>
    <!-- Footer END -->

    <br />
    <br />

    <!-- Figure & Figcaption  -->
    <h1 class="judul">Elemen Figure & Figcaption</h1>
    <p>
      The Ethereum Virtual Machine (EVM) is a decentralized computing
      environment that serves as the runtime for executing smart contracts and
      decentralized applications (DApps) on the Ethereum blockchain. It is a
      core component of Ethereum, enabling developers to deploy and run
      applications in a trustless, decentralized manner.
    </p>
    <figure>
      <img src="evm.png" alt="EVM" width="600" height="400" />
      <figcaption>Ethereum Virtual Machine (EVM) Architecture</figcaption>
    </figure>
    <!-- Figure & Figcaption END  -->

    <br />
    <br />

    <!-- Datalist -->
    <h1 class="judul">Elemen Datalist</h1>
    <form action="#" method="get">
      <label for="browser">Choose your browser from the list:</label>
      <input list="browsers" id="browser" name="browser" />
      <datalist id="browsers">
        <option value="Chrome"></option>
        <option value="Firefox"></option>
        <option value="Internet Explorer"></option>
        <option value="Opera"></option>
        <option value="Safari"></option>
        <option value="Microsoft Edge"></option>
      </datalist>
      <input type="submit" />
    </form>
    <p>
      <b>Note:</b> The <i>datalist</i> tag is not supported in Internet Explorer
      9 and earlier versions.
    </p>
    <!-- Datalist END -->

    <br />
    <br />

    <!-- Output -->
    <!-- <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0</form> -->
    <h1 class="judul">Elemen Output</h1>
    <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">
      0 <input type="range" id="a" value="50" />100 +
      <input type="number" id="b" value="50" />=
      <output name="x" for="a b"></output>
    </form>
    <!-- Output END -->

    <br />
    <br />

    <!-- Canvas -->
    <h1 class="judul">Elemen Canvas</h1>
    <canvas
      id="myCanvas"
      width="200"
      height="100"
      style="border: 1px solid #000000"
    >
      Your browser does not support the HTML5 canvas tag.
    </canvas>
    <canvas
      id="myCanvas"
      width="200"
      height="100"
      style="border: 1px solid #c3c3c3"
    >
      Your browser does not support the HTML5 canvas tag.
    </canvas>
    <script>
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      ctx.fillStyle = "#FF0000";
      ctx.fillRect(0, 0, 150, 75);
    </script>
    <!-- Canvas END -->

    <br />
    <br />

    <!-- SVG -->
    <h1 class="judul">Elemen SVG</h1>
    <svg width="300" height="200">
      <polygon
        points="100,10 40,198 190,78 10,78 160,198"
        style="
          fill: lime;
          stroke: purple;
          stroke-width: 5;
          fill-rule: evenodd;
        "
      />
      Sorry, your browser does not support inline SVG.
    </svg>
    <!-- SVG END -->

    <br />
    <br />

    <!-- PHP -->
     <h1 class="judul">Sintaks dasar PHP</h1>
     <h1>My First Page</h1>
    <?php
    echo "Hello Everyone";
    ?>

    <br />
    <br />
    <br />

    <?php
    function IntroduceSelf(){
        echo "I Am Fahmi Ilham Bagaskara";
    }
    IntroduceSelf();
    ?>

    <br> <br> <br>

    <?php
    $motor=array("Honda","Yamaha","Suzuki");
    echo "I Like ".$motor[0].", ".$motor[1].", and ".$motor[2].".";
    ?>

    <br><br><br>


    <?php 
$cars=array("Volvo","BMW","Toyota");
sort($cars); 
$clength=count($cars);
for($x=0;$x<$clength;$x++)
 { 
 echo $cars[$x]; 
 echo "<br>";
 }
?>
 <br> <br> <br>


<?php 
$numbers=array(4,6,2,22,11);
sort($numbers); 
$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
 { 
 echo $numbers[$x];
 echo "<br>"; 
 } 
?>

<br> <br> <br>

<?php 
$cars=array("Volvo","BMW","Toyota");
rsort($cars); 
$clength=count($cars);
for($x=0;$x<$clength;$x++)
 { 
 echo $cars[$x]; 
 echo "<br>"; 
 } 
?>

<br> <br> <br>

<?php 
$numbers=array(4,6,2,22,11);
rsort($numbers); 
$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
 { 
 echo $numbers[$x];
 echo "<br>"; 
 } 
?>

<br> <br> <br>

<?php 
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

<br> <br> <br>

© 2010-<?php echo date("Y")?>

    <!-- PHP END -->
  </body>
</html>