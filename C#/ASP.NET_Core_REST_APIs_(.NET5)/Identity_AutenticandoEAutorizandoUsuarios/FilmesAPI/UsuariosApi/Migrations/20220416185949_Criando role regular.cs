using Microsoft.EntityFrameworkCore.Migrations;

namespace UsuariosApi.Migrations
{
    public partial class Criandoroleregular : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.UpdateData(
                table: "AspNetRoles",
                keyColumn: "Id",
                keyValue: 99999,
                column: "ConcurrencyStamp",
                value: "f1967f2a-b7e9-42a4-9d9c-6102b5c528bd");

            migrationBuilder.InsertData(
                table: "AspNetRoles",
                columns: new[] { "Id", "ConcurrencyStamp", "Name", "NormalizedName" },
                values: new object[] { 99997, "52bc4e9a-813e-4927-b6b9-630bf123501d", "regular", "REGULAR" });

            migrationBuilder.UpdateData(
                table: "AspNetUsers",
                keyColumn: "Id",
                keyValue: 99999,
                columns: new[] { "ConcurrencyStamp", "PasswordHash", "SecurityStamp" },
                values: new object[] { "9fb16fec-6063-443e-bf0a-41b52190dedf", "AQAAAAEAACcQAAAAENmhMOLVXRXP+KowzbXYxrDiW0Y/kIniztaAK40cpuSD5jBTKS4mHQpj/fPkNl8b8A==", "44bdf8a6-42c8-4ce7-b519-ddb20c91b3a1" });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DeleteData(
                table: "AspNetRoles",
                keyColumn: "Id",
                keyValue: 99997);

            migrationBuilder.UpdateData(
                table: "AspNetRoles",
                keyColumn: "Id",
                keyValue: 99999,
                column: "ConcurrencyStamp",
                value: "0220f570-8915-4921-ab4b-d1f55a7d07fe");

            migrationBuilder.UpdateData(
                table: "AspNetUsers",
                keyColumn: "Id",
                keyValue: 99999,
                columns: new[] { "ConcurrencyStamp", "PasswordHash", "SecurityStamp" },
                values: new object[] { "05e89ec5-b767-4c40-8a84-4e82442062ec", "AQAAAAEAACcQAAAAEFUw+V70mT5o2B9Apfy1xP8F0KSA0/c3jbF3u4XRKYAhn2vydD8bkmvzfxwlbADbTA==", "0bbe51f8-d3c3-475c-8a9d-1070b3daed61" });
        }
    }
}
